<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class TatilModeControllerApi extends BaseController
{
    protected $users;
    protected $products;

    public function __construct()
    {
        $this->users = new Users();
        $this->products = new Product();
    }

    public function tatilmodeapi()
    {
        // Kullanıcıyı oturumdan al
        $userId = session()->get('id');
        
        if (!$userId) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED)
                                  ->setJSON(['message' => 'Unauthorized']);
        }

        // Kullanıcıyı veritabanından al
        $user = $this->users->find($userId);

        if (!$user) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                                  ->setJSON(['message' => 'User not found']);
        }

        // Tatil modunu güncelle
        $newTatilModu = $user['tatil_modu'] == 0 ? 1 : 0;

        // Kullanıcıyı güncelle
        $this->users->update($userId, ['tatil_modu' => $newTatilModu]);

        // Tatil moduna göre ürünleri güncelle
        if ($newTatilModu == 1) {
            $this->products->where('user_id', $userId)->set(['durum' => 0])->update();
        } else {
            $this->products->where('user_id', $userId)->set(['durum' => 1])->update();
        }

        // Güncellenmiş kullanıcıyı geri döndür
        $updatedUser = $this->users->find($userId);

        return $this->response->setJSON($updatedUser);
    }
}

