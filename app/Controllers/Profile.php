<?php namespace App\Controllers;

use CodeIgniter\Controller;

class profile extends Controller {
    public function index() {
        echo view('profile');
    }
}