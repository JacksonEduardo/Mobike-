<x-layout>

<x-header>
    Profilo
</x-header>


<div class="profile">
    <div class="leftProfile"></div>
    <div class="rightProfile">
        <div class="textProfile">
            <div>
                <h2 class="brandFont FontSizeProfile text-white"><span class="colorFont">M</span>obike</h2>
                <p class="generalText fst-italic text-white text-muted">Qui troverai tutti i tuoi annunci inseriti</p>
                <p class="generalText fst-italic text-white text-muted">Inoltre puoi impostare una tua immagine profilo</p>
            </div>
        </div>
    </div>
</div>
<div> 
    <img class="imgProfile" src="{{Storage::url(Auth::user()->avatar)}}" alt="">         
</div>
    
<div class="container-fluid shadow">
    <div class="dropdown">
        <button class="btn dropdown-toggle fst-italic text-muted" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Impostazioni
            <img style="width: 30px; height: 30px" src="/media/settings.png" alt="">
        </button>
        <ul class="dropdown-menu">
            <li>
            <!-- Button trigger modal -->
                <button type="button" class=" btn mx-auto d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#photoProfile">
                    Imposta foto profilo 
                </button>
            </li>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class=" btn bg-danger mx-auto d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#deleteProfile">
                Ellimina profilo
            </button>
        </ul>
    </div>
</div>
      
  <!-- Modal Profile delete-->
  <div class="modal fade" id="deleteProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Imposta la foto profilo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fst-italic">
          Sei sicuro di voler elliminare il tuo profilo?
          <br>
          Con questa operazione anche i tuoi annunci saranno ellimnati.
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{route('user.destroy')}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Cancella profilo</button>
            </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Esci</button>
        </div>
      </div>
    </div>
  </div>

    {{-- Modal photo profile --}}
    <div class="modal fade" id="photoProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Imposta foto profilo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ricorda, un potenziale acaquirente può vedere la tua foto profilo
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{route('changeAvatar', ['user' => Auth::user()])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="file" name="avatar" class="form-control">
                    <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal">chiudi</button>
                    <button type="submit" class="btn btn-primary mt-2">Inserisci Avatar</button>
                </form>
            </div>
        </div>
        </div>
    </div>

        {{-- START BICYCLE SPACE --}}
    <div class="container mt-5">
        <div class="row">
            <div class="text-center">
                <img id="logo" src="/media/logoArancio.png" alt="">
                {{-- <h3 class="fs-1 generalText fw-bold">Dai un'occhiata</h3> --}}
                <p class="brandFont fs-3 text-muted">Le biciclette da te inserite</p>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow">
        <div class="row justify-content-center">
            @if(count($bikes))
            @foreach(Auth::user()->bikes as $bike)
            <div class="col-12 col-md-5">
                <ul class="card-list">
                    <li class="card">
                        <a class="card-image" href="{{route('bike.show', compact('bike'))}}" data-image-full="{{Storage::url($bike->photo)}}">
                            <img src="{{Storage::url($bike->photo)}}" class="card-img-top img-fluid" alt="...">
                        </a>
                        <a class="card-description" href="{{route('bike.show', compact('bike'))}}">
                            <h3>{{$bike->brand}}</h3>
                            <p>{{$bike->name}}</p>
                            <p class="text-muted fst-italic">Inserito da: {{$bike->user->name}}</p>
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
            @else
            <div class="col-12">
                <h3>Nessun annuncio di ricambi presente</h3>
            </div>
            @endif
        </div>
    </div>
    {{-- END BICYLCLE SPACE--}}


    {{-- START SPARE SPACE --}}
    <div class="container mt-5">
        <div class="row">
            <div class="text-center">
                <img id="logo" src="/media/logoArancio.png" alt="">
                {{-- <h3 class="fs-1 generalText fw-bold">Dai un'occhiata</h3> --}}
                <p class="brandFont fs-3 text-muted">I ricambi da te inseriti</p>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow">
        <div class="row justify-content-center">
            @if(count($spares))
            @foreach(Auth::user()->spares as $spare)
            <div class="col-12 col-md-5">
                <ul class="card-list">
                    <li class="card">
                        <a class="card-image" href="{{route('spare.show', compact('spare'))}}" data-image-full="{{Storage::url($spare->photo)}}">
                            <img src="{{Storage::url($spare->photo)}}" class="card-img-top img-fluid" alt="...">
                        </a>
                        <a class="card-description" href="{{route('spare.show', compact('spare'))}}">
                            <h3>{{$spare->brand}}</h3>
                            <p>{{$spare->name}}</p>
                            <p class="text-muted fst-italic">Inserito da: {{$spare->user->name}}</p>
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
            @else
            <div class="col-12">
                <h3>Nessun annuncio di ricambi presente</h3>
            </div>
            @endif
        </div>
    </div>
    {{-- END SPARE SPACE --}}


    {{-- START EXTRA SPACE --}}
    <div class="container mt-5">
        <div class="row">
            <div class="text-center">
                <img id="logo" src="/media/logoArancio.png" alt="">
                {{-- <h3 class="fs-1 generalText fw-bold">Dai un'occhiata</h3> --}}
                <p class="brandFont fs-3 text-muted">Gli accessori da te inseriti</p>
            </div>
        </div>
    </div>

    <div class="container-fluid shadow">
        <div class="row justify-content-center">
            @if(count($extras))
            @foreach(Auth::user()->extras as $extra)
            <div class="col-12 col-md-5">
                <ul class="card-list">
                    <li class="card">
                        <a class="card-image" href="{{route('extra.show', compact('extra'))}}" data-image-full="{{Storage::url($extra->photo)}}">
                            <img src="{{Storage::url($extra->photo)}}" class="card-img-top img-fluid" alt="...">
                        </a>
                        <a class="card-description" href="{{route('extra.show', compact('extra'))}}">
                            <h3>{{$extra->brand}}</h3>
                            <p>{{$extra->name}}</p>
                            <p class="text-muted fst-italic">Inserito da: {{$extra->user->name}}</p>
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
            @else
            <div class="col-12">
                <h3>Nessun annuncio di ricambi presente</h3>
            </div>
            @endif
        </div>
    </div>
    {{-- END EXTRA SPACE --}}

</x-layout>
