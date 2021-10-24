<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller {
    public function index() {
        // include helper form
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $id = $this->request->getVar('id_card');
        $password = $this->request->getVar('password');
        $data = $model->where('id_card', $id)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'id_card' => $data['id_card'],
                    'name' => $data['name'],
                    'age' => $data['age'],
                    'email' => $data['email'],
                    'password'=> $data['password'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/userindex');
            } else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'ไม่พบเลขบัตรประชาชน');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}