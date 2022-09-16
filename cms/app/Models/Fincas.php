<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fincas extends Model
{
    use HasFactory;

    protected $table = 'fincas';

     /* =================================== 
    INNER JOIN DESDE MODELO
     ===================================== */
     public function nomFincas(){

        // return $this->belongsTo('')
    }
    
}
