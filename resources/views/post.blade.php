@extends("plantilla")

@section("titulo")
  Present a Project
@endsection

@section("principal")
      <section>
        <br>
        <br>
        <h1 class="h1RL">Post a Project</h1>
        <br>

        <form class="formulario" action="/proyecto/post" method="POST">
          {{ csrf_field() }}
          <div class="Data">
            @if ($errors->has('nombre'))
              <input class="error caja" id="input" placeholder=" Nombre *" type="nombre" name="nombre" value="{{ old('nombre') }}" required autofocus>
                <p class="mensaje-error">
                  <strong>{{ $errors->first('nombre') }}</strong>
                </p>
            @else
              <input class="input_texto" id="input" placeholder=" Nombre del Proyecto *" type="text" name="nombre" value="{{ old('nombre') }}">
            @endif
          </div>

          <br>
          <div class="Data">
            @if ($errors->has('descripcion'))
              <textarea rows="4" cols="40" class="input_textarea" id="" placeholder=" Breve Descripción del Proyecto (Hasta 300 caractéres) *" type="text" name="descripcion" value="{{ old('descripcion') }}"></textarea>
              <p class="mensaje-error">
                <strong>{{ $errors->first('apellido') }}</strong>
              </p>
            @else
              <textarea rows="4" cols="40" class="input_textarea" id="" placeholder=" Breve Descripción del Proyecto  (Hasta 300 caractéres) *" type="text" name="descripcion" value="{{ old('descripcion') }}"></textarea>
            @endif
          </div>
          <br>
          <div class="input">
            <input class="button" type="submit" name="postear" value="Postear">
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
        </form>
      </section>

@endsection
