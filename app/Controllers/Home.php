<?php

namespace App\Controllers;
use App\Models\BarangModel;

class Home extends BaseController
{
	public function index()
	{
		$barangModel = new BarangModel();
        // $barangs = $barangModel->findAll();
        $barangs = $barangModel->findAll(6);
        // dd($barangs);

        return view('home/index', [
            'barangs' => $barangs,
        ]);
	}
}
