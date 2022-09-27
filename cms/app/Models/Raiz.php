<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raiz extends Model
{
    use HasFactory;
    protected $table = 'terminacion';

    /* =================================== 
    INNER JOIN DESDE MODELO
     ===================================== */
     public function inicio(){

        // return $this->belongsTo('')
    }
}
