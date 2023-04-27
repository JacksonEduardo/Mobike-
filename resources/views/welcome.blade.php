<x-layout>
    
    <x-header>  
        Mobike
    </x-header>

    @if(session('userDeleted'))
        <div class="alert alert-success">
            {{session('userDeleted')}}
        </div>
    @endif
    
    <div class="container-fluid background">
        <div class="row justify-content-center">

            @foreach($bikes as $bike)
                <div class="col-12 col-md-4 my-5 p-auto">
                   
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
            @endforeach
        </div>

        <div class="row justify-content-center">

            @foreach($spares as $spare)
                    <div class="col-12 col-md-4 my-5 p-auto ">
                        <div class="our_solution_category m-0">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <div class="so_top_icon">
                                        <img src="{{Storage::url($spare->photo)}}" class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="solu_title">
                                        <h3>{{$spare->name}}</h3>
                                    </div>
                                    <div class="solu_description">
                                        <p>{{$spare->brand}}</p>
                                        <p>{{$spare->description}}</p>
                                        <p class="fst-italic text-muted">{{$spare->user->name}}</p>
                                        {{-- @dd($bike->user->name) --}}
                                        <a href="{{route('spare.show', compact('spare'))}}">
                                            <button type="button" class="read_more_btn">Dettagli</button>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                        </div> 
                    </div>
            @endforeach

        </div></div>
    </div>

    
</x-layout>