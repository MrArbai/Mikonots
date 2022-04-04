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
            'title' => 'Mikonots',
            'produk' => $this->ProdukModel->getproduk()
        ];
        return view('Konten/index', $data);
    }

    public function detail($br_id)
    {
        $data = [
            'title' => 'Mikonots',
            'produk' => $this->ProdukModel->getproduk($br_id)
        ];
        if (empty($data['produk'])) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(' Judul Komik ' . $br_id . ' Tidak di Temukan ');
        }
        return view('konten/detailproduk', $data);
    }
}
