<x-layout>
    <x-header>
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


    <div class="container-fluid my-5 background">
        <div class="row">
            @if(count($bikes))
                @foreach($bikes as $bike)           
                    <div class="col-12 col-md-4">
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
                                        <p class="fst-italic text-muted">{{$bike->user->name}}</p>
                                        {{-- @dd($bike->user->name) --}}
                                        <a href="{{route('bike.show', compact('bike'))}}">
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
    </div>
</x-layout>

{{-- <div class="our_solution_category">
    <div class="solution_cards_box">
        <div class="solution_card">
            <div class="hover_color_bubble"></div>
            <div class="so_top_icon">
                <img src="{{Storage::url($extra->photo)}}" class="card-img-top" alt="...">
            </div>
            <div class="solu_title">
                <h3>{{$extra->brand}}</h3>
            </div>
            <div class="solu_description">
                <p>{{$extra->name}}</p>
                <p>{{$extra->description}}</p>
                <p>{{$extra->price}} €</p>
                <a href="{{route('extra.index', compact('extra'))}}">
                    <button type="button" class="read_more_btn">Indietro</button>
                </a>
                <a href="{{route('extra.edit', compact('extra'))}}">
                    <button type="button" class="read_more_btn">Modifica</button>
                </a>
                <form method='POST' action="{{route('extra.destroy', compact('extra'))}}" class="d-inline mt-2">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Ellimina</button>  
                </form>
            </div>
        </div>   
    </div>
    <!--  -->
    <div class="solution_cards_box sol_card_top_3"></div>
</div> --}}