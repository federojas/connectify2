@extends("plantilla")

@section("javascript")
  <script src="js/paises.js"></script>
@endsection

@section("titulo")
  Registración
@endsection

@section("principal")
      <section>
        <br>
        <br>
        <h1 class="h1RL">REGISTRATE</h1>
        <br>
        <form class="formulario" action="/register" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="Data">
            @if ($errors->has('nombre'))
              <input class="error caja" id="input" placeholder=" Nombre *" type="nombre" name="nombre" value="{{ old('nombre') }}" required autofocus>
                <p class="mensaje-error">
                  <strong>{{ $errors->first('nombre') }}</strong>
                </p>
            @else
              <input class="input_texto" id="input" placeholder=" Nombre *" type="text" name="nombre" value="{{ old('nombre') }}">
            @endif
          </div>

          <br>
          <div class="Data">
            @if ($errors->has('apellido'))
              <input class="error input_texto" id="input" placeholder=" Apellido *" type="text" name="apellido" value="{{ old('apellido') }}">
              <p class="mensaje-error">
                <strong>{{ $errors->first('apellido') }}</strong>
              </p>
            @else
              <input class="input_texto" id="input" placeholder=" Apellido *" type="text" name="apellido" value="{{ old('apellido') }}">
            @endif
          </div>

          <br>
          <div class="Data">
            @if ($errors->has('email'))
              <input class="error input_texto" id="input" placeholder=" Email *" type="text" name="email" value="{{ old('email') }}">
              <p class="mensaje-error">
                <strong>{{ $errors->first('email') }}</strong>
              </p>
            @else
              <input class="input_texto" id="input" placeholder=" Email *" type="text" name="email" value="{{ old('email') }}">
            @endif
          </div>

          <br>
          <div class="Data">
            @if ($errors->has('password'))
              <input class="error input_texto" id="input" placeholder=" Contraseña *" type="password" name="password" value="">
              <p class="mensaje-error">
                <strong>{{ $errors->first('password') }}</strong>
              </p>
            @else
              <input class="input_texto" id="input" placeholder=" Contraseña *" type="password" name="password" value="">
            @endif
          </div>
          <br>
          <div class="Data">
            @if ($errors->has('password_confirmation'))
              <input class="error input_texto" id="input" placeholder=" Confirmar Contraseña *" type="password" name="password_confirmation" value="">
              <p class="mensaje-error">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
              </p>
            @else
              <input class="input_texto" id="input" placeholder=" Confirmar Contraseña *" type="password" name="password_confirmation" value="">
            @endif
          </div>
          <br>
          <div class="Data">
            <select class="input_texto" name="pais" value="">

            </select>
          </div>
          <br>

          <div class="Data">
            <h6>Fecha de Nacimiento</h6>
            <br>

            @if ($errors->has('fecnac'))
              <input class="error input_texto" id="input" placeholder=" Fecha de Nacimiento *" type="date" name="fecnac" value=""{{ old('fecnac') }}"">
              <p class="mensaje-error">
                <strong>{{ $errors->first('fecnac') }}</strong>
              </p>
            @else
              <input class="input_texto" id="input" placeholder=" Fecha de Nacimiento *" type="date" name="fecnac" value=""{{ old('fecnac') }}"">
            @endif
          </div>
          <br>
          <div class="Data">
            <input class="seleccion" type="radio" name="genero" value="m" checked>
            <label class="genero" for="genero">Masculino</label>
            <input class="seleccion" type="radio" name="genero" value="f">
            <label class="genero" for="genero">Femenino</label>
          </div>
          <br>
          <div class="Data">
            <h6>Foto de Perfil</h6>
            <br>
            @if ($errors->has('avatar'))
              <input type="file" name="avatar" value=""{{ old('avatar') }}"">
              <p class="mensaje-error">
              <strong>{{ $errors->first('avatar') }}</strong>
              </p>
            @else
              <input type="file" name="avatar" value=""{{ old('avatar') }}"">
            @endif
          </div>
          <br>
          <br>
          <br>
          <div class="Data">
            <label class="genero" for="condiciones">Acepto los Terminos y Condiciones</label>
            <input class="seleccion" type="checkbox" name="condiciones" value="condiciones" required>
          </div>
          <br>
          <div class="input">
            <button class="button" type="submit" name="registrarme">Registrarme</button>
            <button class="button" type="reset" name="cancelar">Cancelar</button>
          </div>
          <br>
        </form>
      </section>

@endsection
