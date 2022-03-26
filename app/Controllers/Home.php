<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $komik = $this->ProdukModel->findall();
        $data = [
            'title' => 'Home | Mikonots',
            'komik' => $this->ProdukModel->getproduk()
        ];
        return view('Konten/index', $data);
    }
}
