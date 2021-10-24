<?php namespace App\Controllers;

use CodeIgniter\Controller;

class userindex extends Controller {
    public function index() {
        echo view('userindex');
    }
}