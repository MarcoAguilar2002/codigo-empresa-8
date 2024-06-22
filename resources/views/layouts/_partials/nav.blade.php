<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PRACTICA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <div class="row w-100">
          <div class="col-4 d-flex justify-content-center">
           <div class="{{ request()->routeIs('inicio') ? 'activo' : '' }}">
            <a class="nav-link  text-white" aria-current="page" href="{{route('inicio')}}">Inicio</a>
           </div>
          </div>
          <div class="col-4 d-flex justify-content-center">
            <div class="{{ request()->routeIs('personas.index') ? 'activo' : '' }}">
                <a class="nav-link text-white" href="{{route('personas.index')}}">Personas</a>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-center">
            <div class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">
                <a class="nav-link text-white" href="{{route('contacto')}}">Contacto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  