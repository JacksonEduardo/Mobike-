<x-layout>
    <x-header>
        Pagina di dettaglio
    </x-header>


    <div class="container-fluid my-5 background">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <img src="{{Storage::url($bike->photo)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="solu_title">
                                <h3>{{$bike->brand}}</h3>
                            </div>
                            <div class="solu_description">
                                <p>{{$bike->name}}</p>
                                <p>{{$bike->description}}</p>
                                <p>{{$bike->price}} €</p>
                                <a href="{{route('bike.index', compact('bike'))}}">
                                    <button type="button" class="read_more_btn">Indietro</button>
                                </a>
                                @if(count($bike->spares) > 0)
                                    <hr>
                                    <ul>
                                        @foreach($bike->spares as $spare)
                                            <li>{{$spare->description}} Marchio  {{$spare->brand}}</li>
                                        @endforeach
                                    </ul>
                                    <hr>
                                @endif
                                @if(Auth::user() && Auth::id() == $bike->user_id)
                                    <a href="{{route('bike.edit', compact('bike'))}}">
                                        <button type="button" class="read_more_btn">Modifica</button>
                                    </a>
                                    <form method='POST' action="{{route('bike.destroy', compact('bike'))}}" class="d-inline mt-2">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Ellimina</button>  
                                    </form>
                                @endif
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>