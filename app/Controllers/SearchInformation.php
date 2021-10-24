<?php
namespace App\Controllers;
use App\Models\regisModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class SearchInformation extends Controller {
    public function search() {

   
        $regis = new regisModel();
        $data['regis'] = $regis->join('member','regis.member = member.id_card')->join('category','regis.category_run = category.category_id')
                               ->orderBy('ID', 'DESC')->findAll();
         return view('searchInformation', $data);
        //return json_encode($data) ;
    }
}






