<?php 
namespace App\Models;

use CodeIgniter\Model;

class Integrantes extends Model{
    protected $table      = 'integrantes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'integrante_id';
    protected $allowedFields = ['integrante_id','nombre','apellido','fecha_nacimiento','fecha_muerte','web_oficial','pais_nacimiento'];
}