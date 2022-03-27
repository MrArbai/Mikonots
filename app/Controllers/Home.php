<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    protected $ProdukModel;
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {
        $produk = $this->ProdukModel->findall();
        $data = [
            'title' => 'Home | Mikonots',
            'produk' => $this->ProdukModel->getproduk()
        ];
        return view('Konten/index', $data);
    }
}
