<?php namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = ['category_id','category_name','length','price'];
   
}