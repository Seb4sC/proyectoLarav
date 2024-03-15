<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png" width="30" height="30" alt="">
        </a>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('soldado.show')}}">Soldado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cuartel.show')}}">Cuartel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cuerpo.show')}}">Cuerpo Ejercito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('compania.show')}}">Compañia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('servicio.show')}}">Servicio</a>
        </li>
      </ul>
    </div>
</nav>
