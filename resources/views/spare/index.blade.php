<x-layout>

    <x-header>
        Tutti i ricambi
    </x-header>

    @if(session('spareCreated'))
        <div class="alert alert-success">
            {{session('spareCreated')}}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(count($spares))
            @foreach($spares as $spare)
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

</x-layout>