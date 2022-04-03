<?php
namespace App\Models;
use CodeIgniter\Model;

class NameModel extends Model {
  
    protected $table = 'list';
    
    protected $primaryKey = 'Id';

    protected $allowedFields = ['Firsname','Lastname', 'Email','Time','Time_in','Time_out'];
}