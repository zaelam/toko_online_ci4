<?php
namespace App\Controllers;

class Barang extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $pager = \Config\Services::pager();
        $barangModel = new \App\Models\BarangModel();
        // $barangs = $barangModel->findAll();
        $data = [
            'items' => $barangModel->paginate(10, 'bootstrap'),
            'pager' => $barangModel->pager,
        ];

        return view('barang/index', $data);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($id);
        // dd($barang);
        

        return view('barang/view.php',['barang' => $barang]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'barang');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $barangModel = new \App\Models\BarangModel();
                $barang = new \App\Entities\Barang();

                $barang->fill($data);
                $barang->gambar = $this->request->getFile('gambar');
                $barang->created_by = $this->session->get('id');
                // session()->get('role')
                $barang->created_date = date("Y-m-d H:i:s");
                // dd($barang);
                $barangModel->save($barang);

                $id = $barangModel->insertID();
        
                $this->session->setFlashdata('success');

                $segments = ['barang', 'view', $id];
                $this->session->setFlashdata('success',['Data barang berhasil dimasukan!']);

                return redirect()->to(site_url($segments));
            }
        }
        return view('barang/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            
            $this->validation->run($data, 'barangupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Barang();
                // $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");
                // dd($b);
                $barangModel->update($id, $b);
                $segments = ['barang','view',$id];
                return redirect()->to(site_url($segments));
            }
        }

        return view('barang/update',[
            'barang' => $barang,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);
        $modelBarang = new \App\Models\BarangModel();
        $delete = $modelBarang->delete($id);
        // dd($id);
        if ($delete) {
            # code...
            $this->session->setFlashdata('error',['Data telah dihapus!']);
        }
        return redirect()->to(site_url('barang/index'));
    }
}