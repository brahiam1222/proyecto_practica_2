<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defectos extends Model
{
    use HasFactory;
    protected $table = 'defectos';

    /* =================================== 
    INNER JOIN DESDE MODELO
     ===================================== */
    public function fincas(){

        // return $this->belongsTo('')
    }

}
