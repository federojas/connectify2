<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proyecto;

class ProyectoController extends Controller
{
  public function join() {
    if (!Auth::check()) {
      return redirect("/login");
    }
    $proyectosViejos = Auth::user()->proyectos;
    $proyectosViejosIds = $proyectosViejos->pluck("id");

    $proyectos = Proyecto::whereNotIn("id", $proyectosViejosIds)->get();
    $vac = compact("proyectos");
    return view("join", $vac);
  }

  public function joinproject(Request $req) {
    if (!Auth::check()) {
      return redirect("/login");
    }

    Auth::user()->proyectos()->attach($req["id_proyecto"]);

    return redirect("/proyecto/join");
  }

  public function post() {
    if (!Auth::check()) {
      return redirect("/login");
    }
    return view("post");
  }

  public function store(Request $req) {

    if (!Auth::check()) {
      return redirect("/login");
    }
      $reglas = [
        "nombre" => "string|min:3",
        "descripcion" => "string|min:3",
      ];

      $mensajes = [
        "string" => "El campo :attribute debe ser un texto",
        "min" => "El campo :attribute tiene un mínimo de :min",
        "max" => "El campo :attribute  tiene un máximo de :max",
      ];

      $this->validate($req, $reglas, $mensajes);

      $proyectoNuevo = new Proyecto();

      $proyectoNuevo->nombre = $req["nombre"];
      $proyectoNuevo->descripcion = $req["descripcion"];
      $proyectoNuevo->id_usuario = Auth::id();

      $proyectoNuevo->save();

      return redirect("/usuario/profile");
  }

  public function api() {
    $proyectos = Proyecto::all();
    $vac = compact("proyectos");
  }

  public function unjoinProject(){

  }
  public function deleteProject(){
    $post =
    $post -> delete();
    $USUARIOSENPROYECTO -> unjoinProject();
    return redirect('/profile')->with('¡Post eliminado con exito!');
  }

}
