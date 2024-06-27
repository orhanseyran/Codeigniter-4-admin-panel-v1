<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Brands;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\Product;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    protected $products;
    protected $session_id;
    protected $cargo;
    protected $brand;
    protected $category;
    protected $latestcargo;
    protected $latestbrands;
    protected $latestcategory;

    public function __construct(){
        $this->products = new Product();
        $this->cargo= new Cargo();
        $this->brand= new Brands();
        $this->category= new Category();



        $this->latestbrands = $this->brand->latestactive();
        $this->latestcategory = $this->category->latestactive();
        $this->latestcargo = $this->cargo->mylatestactive();



        $this->session_id = session()->get('id');
    }
    
    public function indexproduct()
    {
        $data = [
            "category" => $this->latestcategory,
            "cargo" => $this->latestcargo,
            "brand" => $this->latestbrands,
        ];
        return view("admin/productadd/index",$data);
        
    }

    public function indexproductedit($id)
    {
        $user = $this->products->where("id", $id)->where("user_id", $this->session_id)->first();

        $userimages = explode(',',$user["images"]);
        if ($user) {
            $data = [
                "product" => $user,
                "category" => $this->latestcategory,
                "cargo" => $this->latestcargo,
                "brand" => $this->latestbrands,
                "images" => $userimages,

            ];
            return view("admin/productedit/index", $data);
        }
        return redirect()->to('/products');
    }
    public function indexproducts()
    {

      $data['products']=$this->products->lastproducts($this->session_id);

        return view("admin/products/index",$data);
        
    }
    public function upload()
    {
        $validationRule = [
            'name' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'category' => 'required',
            'brand' => 'required',
            'description' => 'required',
        ];
    
        if (!$this->validate($validationRule)) {
            return redirect()->back()->with("error", "Formu Lütfen Eksiksiz Doldurun");
        }
    
        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);
        }
    
        $additionalImages = [];
        $images = $this->request->getFiles('images');
        if ($images) {
            foreach ($images['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $fileName = $file->getRandomName();
                    $file->move('uploads', $fileName);
                    $additionalImages[] = $fileName;
                }
            }
        }
    
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'brand' => $this->request->getPost('brand'),
            'cargo' => $this->request->getPost('cargo'),
            'category' => $this->request->getPost('category'),
            'stock_code' => 'SK' . rand(99,999999),
            'user_id' => $this->session_id,
            'qty' => $this->request->getPost('qty'),
            'image' => $imageName ? $imageName : null,
            'images' => !empty($additionalImages) ? implode(',', $additionalImages) : null,
        ];
    
        $this->products->insert($data);
    
        return redirect()->back()->with('success', 'Ürün başarıyla eklendi');
    }
    
    public function update($id)
    {
        $session = session();
        $session_id = $session->get('id');
    
        // Fetch the product to be updated using the session ID and product ID
        $product = $this->products->productupdate($session_id, $id);
        if (!$product) {
            return redirect()->back()->with("error", "Ürün bulunamadı.");
        }
    
        // Initialize image variables
        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            if (!$image->move('uploads', $imageName)) {
                return redirect()->back()->with('error', 'Resim yüklenirken bir hata oluştu.');
            }
        }
    
        // Handle multiple images
        $additionalImages = [];
        $images = $this->request->getFiles('images');
        if ($images) {
            foreach ($images['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $fileName = $file->getRandomName();
                    if (!$file->move('uploads', $fileName)) {
                        return redirect()->back()->with('error', 'Ek resimler yüklenirken bir hata oluştu.');
                    }
                    $additionalImages[] = $fileName;
                }
            }
        }
    
        // Prepare the data for update
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'brand' => $this->request->getPost('brand'),
            'cargo' => $this->request->getPost('cargo'),
            'category' => $this->request->getPost('category'),
            'stock_code' => 'SK' . rand(99, 999999),
            'user_id' => $session_id,
            'qty' => $this->request->getPost('qty'),
            'image' => $imageName ?: $product['image'],
            'images' => !empty($additionalImages) ? implode(',', $additionalImages) : $product['images'],
        ];
    
        // Update the product in the database
        $updated = $this->products->update($id, $data);
        if (!$updated) {
            return redirect()->back()->with('error', 'Ürün güncellenirken bir hata oluştu.');
        }
    
        return redirect()->back()->with("success", "Ürün Başarıyla güncellendi.");
    }
        public function updatastatus($id)
        {
            $session_id = $this->session_id;
            // İstenen veriyi al
            $product = $this->products->productupdate($session_id,$id);

            if (!$product) {
                return redirect()->back()->with("error", "Ürün bulunamadı");
            }
            // Durumun tersini al (toggle işlemi)
            $newDurum = $product["durum"] == 1 ? 2 : 1;
        
            // Güncellenecek veriyi hazırla
            $data = [
                'durum' => $newDurum,
            ];
        
            // Veritabanında güncelle
            $this->products->update($id, $data);
        
            // Başarı mesajını hazırla
            $statusMessage = $newDurum == 1 ? "Aktif" : "Pasif";
            return redirect()->back()->with('success', "Ürün Durumu $statusMessage Güncellendi!");
        }

        public function delete($id){

            $product = $this->products->deleteproduct($id);

            if (!$product) {
                return redirect()->back()->with("success", "Ürün bulunamadı");
            }

            return redirect()->to('/product')->with("success", "Ürün Başarıyla silindi");
        }
}
