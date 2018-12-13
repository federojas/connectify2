@extends("plantilla")

@section("titulo")
  Join a Project
@endsection

@section("principal")
  <br>
  <br>
  <h1 class="h1RL">Join a Project</h1>
  <ul>
    @forelse($proyectos as $proyecto)
      <li>
        <p>{{$proyecto->nombre}}</p>
        <p>{{$proyecto->descripcion}}</p>
        <br>

        <form class="" action="/proyecto/joinproject" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id_proyecto" value="{{$proyecto->id}}">
          <button type="submit" name="button">Join</button>

        </form>
        <br>
        <br>
      </li>
    @empty
        <h3>No hay proyectos</h3>
    @endforelse
  </ul>
  <br>

@endsection
