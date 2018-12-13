<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
  //public $table = "proyectos";
  //public $primaryKey = "id";
  //public $timestamps = false;
  public $guarded = [];

  public function usuarios() {
    return $this->belongsToMany("App\User", "proyecto_usuario", "id_proyecto", "id_usuario");
  }

}
