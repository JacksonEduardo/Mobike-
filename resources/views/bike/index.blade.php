<x-layout>
    
    <x-header class="spaceNav">
        Tutte le biciclette
    </x-header>
    
    @if(session('bikeCreated'))
    <div class="alert alert-success">
        {{session('bikeCreated')}}
    </div>
    @endif
    @if(session('bikeUpdated'))
    <div class="alert alert-success">
        {{session('bikeUpdated')}}
    </div>
    @endif
    @if(session('bikeDeleted'))
    <div class="alert alert-success">
        {{session('bikeDeleted')}}
    </div>
    @endif
    @if(session('accessDenied'))
    <div class="alert alert-danger">
        {{session('accessDenied')}}
    </div>
    @endif


    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(count($bikes))
            @foreach($bikes as $bike)
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
{{-- 
    <div class="container-fluid my-5 background">
        <div class="row justify-content-center">
            @if(count($bikes))
                @foreach($bikes as $bike)           
                    <div class="col-12 col-md-4 my-5 justify-content-center p-auto">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <div class="so_top_icon">
                                        <img src="{{Storage::url($bike->photo)}}" class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="solu_title">
                                        <h3>{{$bike->brand}}</h3>
                                    </div>
                                    <div class="solu_description">
                                        <p>{{$bike->name}}</p>
                                        <p class="fst-italic text-muted">{{$bike->user->name}}</p> --}}
                                        {{-- @dd($bike->user->name) --}}
                                        {{-- <a href="{{route('bike.show', compact('bike'))}}">
                                            <button type="button" class="read_more_btn">Dettagli</button>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                @endforeach
             @else
                <div class="col-12">
                    <h3>Nessun annuncio di ricambi presente</h3>
                </div>
            @endif
        </div>
    </div> --}}

</x-layout>