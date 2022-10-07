<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegTerminacion extends Model
{
    use HasFactory;
    
    protected $table = 'terminacion';
    public function equal_Fincas(){

        return $this->belongsTo('App\Models\Fincas', 'finca', 'id_fincas');
   }
   //  public function nom_Fincas(){

   //      return $this->belongsToMany('App\Models\Fincas') ;
   // }
    
   public $timestamps = false;
}
