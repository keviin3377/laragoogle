<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-link px-2 text-white">Las apis ya desarrolladas = </li>
        <li><a href="https://github.com/keviin3377/apisms" target="_blank"  class="nav-link px-2 text-white">&raquo;api de sms</a></li>
        <li><a href="https://github.com/keviin3377/webspotify" target="_blank" class="nav-link px-2 text-white">&raquo;api de spotify</a></li>
        <li><a href="https://github.com/keviin3377/laragoogle" target="_blank" class="nav-link px-2 text-white">&raquo;api de google</a></li>
        <li><a href="https://github.com/keviin3377/facebooklog" target="_blank" class="nav-link px-2 text-white">&raquo;api de facebook</a></li>
      </ul>

      @auth
        {{auth()->user()->name}}
        <div class="nav-link px-2 text-white">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Cerrar sesion</a>
        </div>
      @endauth
      
      @guest
        <div class="nav-link px-2 text-white">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Iniciar sesion</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Registrarse</a>
        </div>
      @endguest
    </div>
  </div>
</header>