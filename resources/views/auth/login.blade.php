@extends("plantilla")
@section("titulo")
  Login
@endsection

@section("principal")
  <body>
    <section>
      <div class="todo">
        <div class="container">
          <div class="titulo">
            <br>
            <br>
            <h1 class="h1RL">INGRESAR</h1>
            <br>
          </div>

          <form class="formulario" action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}

            <div class="input">
              @if ($errors->has('email'))
                <input class="error caja" id="input" placeholder=" Email *" type="email" name="email" value="{{ old('email') }}" required autofocus>
                <p class="mensaje-error">
                  <strong>{{ $errors->first('email') }}</strong>
                </p>
              @else
                <input class="caja" id="input" placeholder=" Email *" type="email" name="email" value="">
              @endif
            </div>


            <div class="input">
              @if ($errors->has('password'))
                <input class="error caja" id="input" placeholder=" Contraseña *" type="password" name="password" value="">
                @if ($errors->has('password'))
                    <p class="mensaje-error">
                      <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
              @else
                <input class="caja" id="input" placeholder=" Contraseña *" type="password" name="password" value="">

                  @if (Route::has('password.request'))
                    <p>
                      <a class="genero" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña?') }}
                      </a>
                    </p>
                  @endif

              @endif
            </div>

            <div class="recordar">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="genero" for="remember">
                    {{ __('Recordarme') }}
                </label>
            </div>


            <div class="input">
              <input type="submit" name="aceptar" class="boton" value="Login">
            </div>
          </form>
          <br>
        </div>
      </div>
    </section>

@endsection
