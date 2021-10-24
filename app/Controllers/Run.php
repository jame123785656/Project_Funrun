<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\regisModel;
use App\Models\UserModel;

class Run extends Controller {
    public function index   () {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('run', $data);
    }

    public function regisRun(){
        $session = session();
        try{
            $db = \Config\Database::connect();
    
            $sql = "SELECT MAX(CAST(SUBSTRING(ID, 4, 10) AS UNSIGNED)) AS maxid FROM regis";
            $query = $db->query($sql);
            $row = $query->getResult();
            $maxid = $row[0]->maxid;
            $code = '';
    
           if($maxid == null)
             {
                $code = 'RUN0000001';
             }else{
                    $id = (string) $maxid + 1;
                    $fullid =   str_pad($id,7,'0',STR_PAD_LEFT);
                    $code = 'RUN'.$fullid;
    
             }
            $regisModel = new regisModel();
            $data = [
                'ID' => $code,
                'member'=>$session->get('id_card'),
                'category_run'=> $this->request->getVar('category')
            ];
            $regisModel->insert($data);
            } catch(Exception $e){
                return $e->getMessage();
            }
            return redirect()->to('/userindex');
    }

//     public function save() {
//         // include helper form
//         helper(['form']);
//         // set rules validation form
//         $rules = [
//             'ID'=> 'required|min_length[10]|max_length[13]',
//             'category_run' => 'required|min_length[3]|max_length[20]'
            
//         ];
//         if ($this->validate($rules)) {
//             $model = new regisModel();
//             $data = [
//                 'ID' => $this->request->getVar('ID'),
//                 'category_run' => $this->request->getVar('category_run')
               
//             ];
//             $model->save($data);
//             return redirect()->to('/userindex');
//         } else {
//             echo mysqli_error($connect);
//         }
//     }
 }
