<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        // include helper form
        helper(['form']);
        // set rules validation form
        $rules = [
            'id_card'=> 'required|min_length[13]|max_length[13]',
            'name' => 'required|min_length[3]|max_length[20]',
            'age' => 'required|min_length[1]|max_length[2]',
            'email' => 'required|min_length[10]|max_length[50]',
            'password' => 'required|min_length[4]|max_length[8]',
            'confpassword' => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' =>$this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->insert($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}