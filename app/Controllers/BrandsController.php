<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Brands;
use CodeIgniter\HTTP\ResponseInterface;

class BrandsController extends BaseController
{
    protected $brands;
    protected $latest;

    public function __construct(){
        $this->brands = new Brands();

        $this->latest = $this->brands->latest();
    }

    public function indexbrands()
    {
        $data['brands'] = $this->latest;

        return view("admin/brand/index",$data);

    }

    public function createbrands(){

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
       

        $this->brands->insert($data);

        return redirect()->back()->with('success', "Marka Başarıyla Eklendi !");;
    }
    public function updatebrands($id){
        $data=[
            'ad' => $this->request->getPost('ad'),
            'durum' => $this->request->getPost('durum')
        ];
        $this->brands->update($id,$data);
        return redirect()->back()->with('success', "Marka Başarıyla Güncellendi !");
    }
    public function deletebrands($id){
        $this->brands->delete($id);
        return redirect()->back()->with('success', "Marka Başarıyla Silindi !");
    }
}
