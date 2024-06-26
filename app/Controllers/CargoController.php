<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Cargo;
use CodeIgniter\HTTP\ResponseInterface;

class cargoController extends BaseController
{
    protected $cargo;
    protected $latest;

    public function __construct(){
        $this->cargo = new Cargo();


        //sadece kullanıcın kargo şirketlerini getirir

        $this->latest = $this->cargo->mylatest();
    }

    public function indexcargo()
    {
        $data['cargo'] = $this->latest;

        return view("admin/cargo/index",$data);

    }

    public function createcargo(){

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
            'durum' => $this->request->getvar('durum'),
            'user_id' => session()->get("id"),
        ];
       

        $this->cargo->insert($data);

        return redirect()->back()->with('success', "Kargo Başarıyla Eklendi !");;
    }
    public function updatecargo($id){

       $cargo =  $this->cargo->where('id', $id)->where('user_id',session()->get("id"))->first();

       if ($cargo) {
        $data=[
            'ad' => $this->request->getPost('ad'),
            'durum' => $this->request->getPost('durum'),
            'user_id' => session()->get("id"),
        ];

        $this->cargo->update($id,$data);
        return redirect()->back()->with('success', "Kargo Başarıyla Güncellendi !");
       }

       return redirect()->back()->with('error', "Yetkisiz İşlem !");
  

    }
    public function deletecargo($id){
        $this->cargo->delete($id);
        return redirect()->back()->with('success', "Kargo Başarıyla Silindi !");
    }
}
