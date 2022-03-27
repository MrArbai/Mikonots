<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'br_id';


    protected $returnType     = 'array';

    protected $allowedFields = ['br_nm', 'br_item', 'br_hrg', 'br_stok', 'br_satuan', 'br_gbr', 'ket', 'br_sts'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



    public function getproduk($br_id = false)
    {
        if ($br_id == false) {
            return $this->findall();
        }

        return $this->where(['br_id' => $br_id])->first();
    }
}
