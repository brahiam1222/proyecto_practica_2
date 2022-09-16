<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    use HasFactory;
    protected $table = 'terminacion';
    /* =================================== 
    INNER JOIN DESDE MODELO
     ===================================== */
     public function tapas(){

        return $this->belongsTo('App\Fincas', 'finca', 'id_fincas');
    }

}
