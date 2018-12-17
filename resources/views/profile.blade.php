@extends("plantilla")

@section("titulo")
  Perfil
@endsection

@section("principal")
  <br>
  <h1>Bienvenido! {{Auth::user()->nombre}}</h1>
	<ul>
		<li>
			Nombre: {{Auth::user()->nombre}}
		</li>
		<li>
			Apellido: {{Auth::user()->apellido}}
		</li>
		<li>
			Email: {{Auth::user()->email}}
		</li>
		<li>
			Fecha de Nacimiento: {{Auth::user()->fecnac}}
		</li>
		<li>
			Género: {{Auth::user()->genero}}
		</li>
		<li>
			País: {{Auth::user()->pais}}
		</li>
	</ul>
	<div>
		<img src="/storage/avatars/{{Auth::user()->avatar}}" width="200">
	</div>

  <br>
  <br>
  <h1 class="h1RL">Mis Proyectos</h1>

  <ul>
    @forelse($misProyectos as $proyecto)
      <li>
        <p>Nombre: {{$proyecto->nombre}}</p>
        <p>Descripción: {{$proyecto->descripcion}}</p>
        <p>Cantidad de Participantes: {{$proyecto->cant_participantes}}</p>
        <br>
        <br>
        <br>
        <form class="" action="/proyecto/eliminarproject" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id_proyecto" value="{{$proyecto->id}}">
          <button type="submit" name="button">Eliminar Proyecto</button>
      </li>
    @empty
        <h3>No hay proyectos</h3>
    @endforelse
  </ul>
  <br>

  <h1 class="h1RL">Proyectos en los que Colaboro</h1>
  <ul>
    @forelse($colaboracionProyectos as $proyecto)
      <li>
        <p>Nombre: {{$proyecto->nombre}}</p>
        <p>Descripción: {{$proyecto->descripcion}}</p>
        <p>Cantidad de Participantes: {{$proyecto->cant_participantes}}</p>
        <br>
        <br>
        <br>
        <form class="" action="/proyecto/unjoinproject" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id_proyecto" value="{{$proyecto->id}}">
          <button type="submit" name="button">Salir del Proyecto</button>
      </li>
    @empty
        <h3>No hay proyectos</h3>
    @endforelse
  </ul>
  <br>











@endsection
