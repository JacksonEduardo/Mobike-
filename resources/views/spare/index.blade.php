<x-layout>

<x-header>
    Tutti i ricambi
</x-header>

@if(session('spareCreated'))
    <div class="alert alert-success">
        {{session('spareCreated')}}
    </div>
@endif

<div class="container-fluid my-5 background">
    <div class="row">
        @if(count($spares))
            @foreach($spares as $spare)           
                <div class="col-12 col-md-4">
                    <div class="our_solution_category">
                        <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <img src="{{Storage::url($spare->photo)}}" class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="solu_title">
                                    <h3>{{$spare->brand}}</h3>
                                </div>
                                <div class="solu_description">
                                    <p>{{$spare->name}}</p>
                                    <p class="fst-italic text-muted">{{$spare->user->name}}</p>
                                    <a href="{{route('spare.show', compact('spare'))}}">
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