<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proyecto;
use App\User;

class UsuarioController extends Controller
{
  public function profile() {
    if (!Auth::check()) {
      return redirect("/login");
    }

    $misProyectos = Proyecto::where('id_usuario', '=', Auth::user()->id)->get();

  $usuario=User::find(12);
  $usuario->proyectos;
  dd($usuario->proyectos);

    $colaboracionProyectos = Proyecto::where('id_usuario', '=', Auth::user()->id);


    return view("profile", compact('misProyectos', 'colaboracionProyectos'));
  }
}
