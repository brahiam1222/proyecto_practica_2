<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tapas extends Model
{
    use HasFactory;
    protected $table = 'tapas';

    /* =================================== 
    INNER JOIN DESDE MODELO
     ===================================== */
     public function tapas(){

        // return $this->belongsTo('')
    }

}
