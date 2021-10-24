<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Update extends Controller {
    public function index() {
        $data = [];
        echo view('update',$data);
    }
    public function update() {
        $model = new UserModel();
        $session = session();
        $id_card = $session->get('id_card');
        
        $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' =>$this->request->getVar('email'),
           //'passwords' =>$this->request->getVar('passwords'),
        ];
        if( $model->Where('id_card',$id_card)->update($id_card,$data)){
            $session->set($data);

       return redirect()->to('/profile');
        }
    }
}
