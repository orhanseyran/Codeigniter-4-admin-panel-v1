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
            'image' => $imageName ? $imageName : "Resim Yok",
            'images' => !empty($additionalImages) ? implode(',', $additionalImages) : "Resim Yüklenmedi",
        ];
    
        $this->products->insert($data);
    
        return redirect()->back()->with('success', 'Ürün başarıyla eklendi');
    }
    
            public function update($id)
        {
         

            $session_id = $this->session_id;

            // Güncellenecek ürünü veritabanından al
            $product = $this->products->productupdate($session_id,$id);

            if (!$product) {
                return redirect()->back()->with("error", "Ürün bulunamadı");
            }

            // Yeni verileri güncelleme için hazırla
            $data = [
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'description' => $this->request->getPost('description'),
                'brand' => $this->request->getPost('brand'),
                'cargo' => $this->request->getPost('cargo'),
                'category' => $this->request->getPost('category'),
                'user_id' => $this->session_id,
            ];

            // Yeni ana resim varsa işle
            $image = $this->request->getFile('image');
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                $data['image'] = $imageName;
            }

            // Ek resimleri işle
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

            // Eski ek resimleri ekleyerek yeni resimleri güncelle
            $existingImages = explode(',', $product['images']);
            $updatedImages = array_merge($existingImages, $additionalImages);
            $data['images'] = implode(',', $updatedImages);

            // Veritabanında güncelle
            $this->products->update($product, $data);

            return redirect()->back()->with("success", "Ürün Başarıyla güncellendi");
        }
        public function delete($id){

            $product = $this->products->deleteproduct($this->session_id);

            if (!$product) {
                return redirect()->back()->with("success", "Ürün bulunamadı");
            }

            return redirect()->to('/product')->with("success", "Ürün Başarıyla silindi");
        }
}
