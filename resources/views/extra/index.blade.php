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


    <div class="container-fluid background">
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
    




{{-- <div class="container-fluid my-5 background">
    <div class="row">
            @if(count($extras))
                @foreach($extras as $extra)           
                    <div class="col-12 col-md-4 my-5 p-auto">
                        <div class="our_solution_category m-0">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <div class="so_top_icon">
                                        <img src="{{Storage::url($extra->photo)}}" class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="solu_title">
                                        <h3>{{$extra->brand}}</h3>
                                    </div>
                                    <div class="solu_description">
                                        <p>{{$extra->name}}</p>
                                        <p class="fst-italic text-muted">{{$extra->user->name}}</p>
                                        <a href="{{route('extra.show', compact('extra'))}}">
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

{{-- <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="our_solution_category">
        <div class="solution_cards_box">
            <div class="solution_card">
                <div class="hover_color_bubble"></div>
                <div class="so_top_icon"></div>
                <div class="solu_title">
                    <h3>Demo 1</h3>
                </div>
                <div class="solu_description">
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                    <button type="button" class="read_more_btn">Read More</button>
                </div>
            </div>   
        </div>
        <!--  -->
        <div class="solution_cards_box sol_card_top_3"></div>
    </div>
</div> --}}



  {{-- <div class="card" style="width: 18rem;">
                                <img src="{{Storage::url($extra->photo)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{$extra->brand}}</h5>
                                <p class="card-text">{{$extra->name}}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div> --}}