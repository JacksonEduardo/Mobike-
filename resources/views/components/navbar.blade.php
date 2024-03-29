
<nav class="100-vw colorPrimary fixed-top">
  <div class="navbar shadow mx-auto borderCustom navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid justify-content-between">
      <img id="logo" src="/media/logo.png" alt="">
      <a class="brandFont effetto fs-1 navbar-brand brandCustom ms-3" href="{{route('homepage')}}"><span class="colorFont effetto">M</span>obike</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  d-flex justify-content-between">
          <li class="nav-item">
            <a class="nav-link active textColor generalText fs-5" aria-current="page" href="{{route('bike.index')}}">Bikes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active textColor generalText fs-5" aria-current="page" href="{{route('spare.index')}}">Ricambi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active textColor generalText fs-5" aria-current="page" href="{{route('extra.index')}}">Accessori</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active textColor generalText fs-5" aria-current="page" href="{{route('profile')}}">Profilo</a>
          </li> --}}
        </ul>
           
            @Auth
            <div class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle textColor generalText fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Ciao {{Auth::user()->name}} <br>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item generalText fs-5" href="{{route('bike.create')}}">Inserisci Bike</a></li>
                <li><a class="dropdown-item generalText fs-5" href="{{route('spare.create')}}">Inserisci Ricambio</a></li>
                <li><a class="dropdown-item generalText fs-5" href="{{route('extra.create')}}">Inserisci Accessorio</a></li>
                <li class="nav-item"><a class="nav-link active textColor generalText fs-5" aria-current="page" href="{{route('profile')}}">Profilo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
              </ul>
            </div>
            @else
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle textColor generalText fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao! accedi qui
              </a>
              <ul class="dropdown-menu dropdown-menu-dark colorPrimary">
                <li><a class="dropdown-item textColor generalText fs-5" href="{{route('register')}}">Registrati</a></li>
                <li><a class="dropdown-item textColor generalText fs-5" href="{{route('login')}}">Accedi</a></li>
              </ul>
            </div>
            @endif
          </div>
          <hr>  
      </div>
    </div>
  </div> 
</nav>