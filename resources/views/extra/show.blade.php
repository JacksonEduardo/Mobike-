<x-layout>
    <x-header>
        Dettagli prodotto
    </x-header>



    <div class="containerShow">
        <div class="left">
            <img class="imgShow shadow" src="{{Storage::url($extra->photo)}}" alt="...">
        </div>
        <div class="right p-5">
            <h1 class="generalText fw-bold">{{$extra->brand}}</h1>
            <p class="generalText fs-2 fst-italic">{{$extra->name}}</p>
            <p class="generalText fs-3 fst-italic">{{$extra->description}}</p>
            <p class="generalText fs-4">{{$extra->price}} €</p>
            @if(Auth::user() && Auth::id() == $extra->user_id)
                <div>
                    <a class="text-decoration-none" href="{{route('extra.edit', compact('extra'))}}">
                        <button type="button" class="button mb-4 text-black">Modifica</button>
                    </a>
                    <form method='POST' action="{{route('extra.destroy', compact('extra'))}}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mx-3 my-auto btn btn-danger">Ellimina</button>  
                    </form>
                </div>
            @endif
            <p class="date">Inserito il: {{$extra->created_at}}</p>

            <a href="{{route('extra.index')}}">
                <button class="button mt-3 mb-5 text-black">Indietro</button>
            </a>
        </div>
    </div>



























    {{-- <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-12 my-5">
                <div class="our_solution_category">
                    <div class="solution_cards_box d-flex">
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
                                    <button type="button" class="read_more_btn">Intro</button>
                                </a>
                                @if(Auth::user() && Auth::id() == $extra->user_id)                                                                
                                    <a href="{{route('extra.edit', compact('extra'))}}">
                                        <button type="button" class="read_more_btn">Modifica</button>
                                    </a>
                                    <form method='POST' action="{{route('extra.destroy', compact('extra'))}}" class="d-inline mt-2">
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
    </div> --}}
</x-layout>