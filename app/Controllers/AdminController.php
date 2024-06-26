<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Brands;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    protected $users;
    protected $session;
    protected $product;
    protected $category;
    protected $cargo;
    protected $brands;
    protected $getproduct;
    protected $allproduct;
    public function __construct(){
        $this->users = new Users();
        $this->category = new Category();
        $this->cargo = new Cargo();
        $this->brands = new Brands();        
        $this->session = session()->get('id');
        $this->product = new \App\Models\Product();
        $this->getproduct = $this->product->lastproducts($this->session);
        $this->allproduct = $this->product->findAll();

        
    }
    
    public function indexdashboard()
    {
        $data = [
            'product' => $this->getproduct,
            'allproduct' => $this->allproduct,
            'category' => $this->category->latest(),
            'cargo' => $this->cargo->mylatest(),
            'brands' => $this->brands->latest(),
            'auth' => $this->users->where('id', $this->session)->first(),
            'user' => $this->users->where('role', 'Satici')->findAll(5),

        ];
        return view("admin/dashboard/index",$data);

    }
}
