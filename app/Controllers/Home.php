<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $produk = $this->ProdukModel->findall();
        $data = [
            'title' => 'Home | Mikonots',
            'produk' => $this->ProdukModel->getproduk()
        ];
        return view('Konten/index', $data);
    }
}
