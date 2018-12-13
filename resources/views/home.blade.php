@extends("plantilla")

@section("titulo")
  Home
@endsection

@section("principal")
    <section>
        <div class="main">

          <div class="primero">
              <h2> “La mejor forma de emprender algo es dejando de hablar de ello y empezar a hacerlo”</h2>
          </div>

          <div class="segundo" id="container">
            <br>
            <br>
            <div>
              <a href="/proyecto/join">Join a project</a>
            </div>
            <div>
              <a href="/proyecto/post">Post a project</a>
            </div>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>

        <div class="tercero">
          <img src="img/p.jpg" alt="">
          <img class="grow" src="img/w.jpg" alt="">
          <img src="img/create.jpg" alt="">
          <img src="img/idea.jpg" alt="">
          <img src="img/encontrar.jpg" alt="">
        </div>
    </section>
@endsection
