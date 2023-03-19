<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img id="logo" src="/media/logo.png" alt="">
      <a class="navbar-brand ms-3" href="{{route('homepage')}}" id="brand">Mobike</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="d-flex">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('profile')}}">Profilo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('bike.index')}}">Bikes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('spare.index')}}">Ricambi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('extra.index')}}">Accessori</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">Inserisci annuncio</a>
              </li> --}}
          </div>
          
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{-- Ciao {{Auth::user()->name}} <br> --}}
                  Inserisci un annuncio
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('bike.create')}}">Inserisci Bike</a></li>
                  <li><a class="dropdown-item" href="{{route('spare.create')}}">Inserisci Ricambio</a></li>
                  <li><a class="dropdown-item" href="{{route('extra.create')}}">Inserisci Accessorio</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                  <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
                </ul>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('register')}}">Inserisci annuncio</a>
            </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
              </li> --}}
              <div class="d-flex">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao! accedi qui
                  </a>
                  <ul class="dropdown-menu">
                    
                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                  </ul>
                </li>
            </div>
            @endif
        </ul>
      </div>
    </div>
  </nav>