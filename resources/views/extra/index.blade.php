<x-layout>

    <x-header>
        Accessori
    </x-header>
    
    @if(session('extraCreated'))
        <div class="alert alert-success">
            {{session('extraCreated')}}
        </div>
    @endif
    @if(session('extraUpdate'))
        <div class="alert alert-success">
            {{session('extraUpdate')}}
        </div>
    @endif
    @if(session('accessDenied'))
        <div class="alert alert-success">
            {{session('accessDenied')}}
        </div>
    @endif


    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(count($extras))
            @foreach($extras as $extra)
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
    
</x-layout>