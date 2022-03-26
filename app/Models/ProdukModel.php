<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'br_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['br_nm', 'br_item', 'br_hrg', 'br_stok', 'br_satuan', 'br_gbr', 'ket', 'br_sts'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function getproduk($br_id = false)
    {
        if ($br_id == false) {
            return $this->findall();
        }

        return $this->where(['Slug' => $br_id])->first();
    }
}
