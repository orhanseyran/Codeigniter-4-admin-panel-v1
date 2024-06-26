<?php

namespace App\Models;

use CodeIgniter\Model;

class Cargo extends Model
{
    protected $table            = 'Cargo';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['ad','durum',"user_id"];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function mylatest(){
        return $this->orderBy('created_at', 'DESC')->where("user_id",session()->get("id"))->findAll();
    }
    public function mylatestactive(){
        return $this->orderBy('created_at', 'DESC')->where("durum",1)->findAll();
    }
    public function mylatestdeactive(){
        return $this->orderBy('created_at', 'DESC')->where("durum",0)->findAll();
    }
}
