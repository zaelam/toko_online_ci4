<?php
namespace App\Controllers;
use TCPDF;

class Transaksi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $transaksiModel = new \App\Models\TransaksiModel();
        $model = $transaksiModel->join('barang','barang.id=transaksi.id_barang')
                                ->join('user','user.id=transaksi.id_pembeli')
                                ->findAll();
        // dd($model);
        return view('transaksi/index',[
            'model' => $model,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->where('id_transaksi', $id)
                                    ->join('barang','barang.id=transaksi.id_barang')
                                    ->join('user','user.id=transaksi.id_pembeli')
                                    ->first();
        return view('transaksi/view',['transaksi' => $transaksi]);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->join('barang','barang.id_barang=transaksi.id_barang')
                                    ->join('user','user.id=transaksi.id_pembeli')
                                    ->where('id_transaksi', $id)
                                    ->first();
        // dd($transaksi);
        return view('transaksi/update',['transaksi' => $transaksi]);
    }

    public function ubah($id)
    {
        // $id = $this->request->uri->getSegment(3);
        $transaksiModel = new \App\Models\TransaksiModel();
        if ($this->request->getPost()) {
            $data = [
                'status' => $this->request->getPost('status')
            ];
        
            $transaksiModel->update($id, $data);
        }

        return redirect()->to(site_url('transaksi/index'));
    }

    public function invoice()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);
        
        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);
        
        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);

        $html = view('transaksi/invoice',[
            'transaksi' => $transaksi,
            'pembeli' => $pembeli,
            'barang' => $barang,
        ]);
        $pdf = new TCPDF('L', PDF_UNIT, "A5", true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Zaela Mulana');
        $pdf->SetTitle('Invoice');
        $pdf->SetSubject('Invoice');

        $pdf->setPrintHeader(false);
        $pdf->setPrintfooter(false);

        $pdf->addPage();

        $pdf->writeHTML($html, true,false,true,false, '');
        $this->response->setContentType('application/pdf');

        $pdf->Output('invoice.pdf', 'I');

    }

    public function sendEmail()
    {
        $this->email->setFrom('zaela13579@gmail.com','zaelamaulana');
        $this->email->setTo('bitcasestudio@gmail.com');
        $this->email->setSubject('Testing Email CI4');
        $this->email->setMessage('<h1>Tes Email</h1><p>ini tes email</p>');
        $this->email->send();
        if(! $this->email->send()){
            return false;
            echo 'gagal';
        }else{
            return true;
            echo 'gagal';
        }
    }
}