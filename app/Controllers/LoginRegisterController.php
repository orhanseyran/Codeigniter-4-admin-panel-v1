<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class LoginRegisterController extends BaseController
{
    protected $user;

    public function __construct(){
        $this->user = new Users();
    }
    public function loginuser()
    {
        return view("LoginRegister/login");
    }

    public function registeruser(){
        return view("LoginRegister/register");
    }

    public function registerpost(){

        
            $rules = [
                'name' =>'required',
                'email' =>'required',
                'password' => 'required',
            ];

            //Formdan gelen verileri validation işlemine sok

            if ($this->validate($rules)) {
                $data = [
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    "role" => $this->request->getvar("role")


                ];
               $usercheck= $this->user->userkontrol($data["email"]);
               //user modelden gelen userkontrol fonksiyonunu kullanarak kullanıcı kontrolünü sağlar
                if ($usercheck) {

                    //eğer kullanıcı kayıtlıysa kullanıcyı kayıt olma sayfasına geri döndür ve ekranında hata bastır
                    return redirect()->route(base_url('/register-user'))->with("hata","Kullanıcı Zaten Kayıtlı");
                }

               $session = $this->user->save($data);

//deneme
               // eğer kullanıcı kayıt session ile oturum başlat
               $user = $this->user->where('email', $data['email'])->first();

               if ($user) {
                $session = session();
                $session->set([

                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'role' => $this->request->getvar("role"),
                    'id' => $user['id'],
                    'isLoggedIn' => true,
                    
                ]);
                // session ile oturum başlatıldıktan sonra dashboard sayfasına yönlendir


                return redirect()->to('/');
                # code...
               }
               else {
                //eğer hata varsa başlangıc sayfasına yönlendir
                # code...
                return redirect()->to(base_url('/register-user'))->with("hata","Kayıt Olunurken Bir Hata Oluştu");
                
               }


                return redirect()->to(base_url('/register-user'));
            }
        }

        public function loginpost(){
            $rules = [
                'email' =>'required',
                'password' => 'required',
            ];

            if($this->validate($rules)){
                $data = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $user = $this->user->where('email', $data['email'])->first();

                if ($user) {
                    if (password_verify($data['password'], $user['password'])) {
                        $session = session();
                        $session->set([
                            'name' => $user['name'],
                            'email' => $user['email'],
                            'role' => $user['role'],
                            'id' => $user['id'],
                            'isLoggedIn' => true,
                        ]);
                        return redirect()->to('/');
                    } else {
                        return redirect()->to(base_url('/login-user'))->with("hata","Şifre Yanlış");
                    }
                }
            }
        }

        public function logout(){
            $session = session();
            $session->destroy();
            return redirect()->to(base_url('/login-user'));
        }
    
  
    
}
