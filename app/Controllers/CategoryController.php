<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    protected $category;
    protected $latest;

    public function __construct(){
        $this->category = new Category();

        $this->latest = $this->category->latest();
    }

    public function index()
    {
        $data['category'] = $this->latest;

        return view("admin/category/index",$data);

    }

    public function create(){

        $rules = [
            'ad' => 'required|',
            'durum'    => 'required|'
        ];
    
        if(!$this->validate($rules)){
            // Validation failed, return to form with errors
            return redirect()->back()->withInput()->with('error', "Formu Eksiksiz Doldur !");
        }
        

        $data=[
            'ad' => $this->request->getvar('ad'),
            'durum' => $this->request->getvar('durum')
        ];
       

        $this->category->insert($data);

        return redirect()->back()->with('success', "Kategori Başarıyla Eklendi !");
    }
    public function update($id){
        $data=[
            'ad' => $this->request->getPost('ad'),
            'durum' => $this->request->getPost('durum')
        ];
        $this->category->update($id,$data);
        return redirect()->back()->with('success', "Kategori Başarıyla Güncellendi !");
    }
    public function delete($id){
        $this->category->delete($id);
        return redirect()->back()->with('success', "Kategori Başarıyla Silindi !");
    }


}
