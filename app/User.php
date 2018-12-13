<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = "usuarios";

    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proyectos() {
      return $this->belongsToMany("App\Proyecto", "proyecto_usuario", "id_usuario", "id_proyecto");
    }

    public function getNombreCompleto() {
      return $this->nombre . " " . $this->apellido;
    }

}
