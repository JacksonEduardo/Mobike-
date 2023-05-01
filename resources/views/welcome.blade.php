
<x-layout>
    
<div class="h-100 imgWelcome">
    <div class="brandWelcome rounded hidden">
        <h1 class="animationBrand brandFont textColor fontSizeWelcome m-0"><span class="colorFont">M</span>obike</h1>
        <a href="{{route('bike.index')}}">
            <button class="buttonWelcome">
                Annunci
            </button>
        </a>
        <div class="btnSize">
            <p class="word generalText fs-1"></p>
        </div>
    </div>
</div>
{{-- START WITH 3 DIV WITH BIKES SPARES EXTRAS --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-4 backgroundBike d-flex justify-content-center">
            <div class="mt-2 descriptionTreeCard">
                    <p class="textColor text-center generalText"><span class="fs-2">Biciclette </span>I migliori marchi sul mercato</p>
                <div class=" d-flex justify-content-center">
                    <a href="{{route('bike.index')}}">
                        <button class="button generalText">Scopri di più</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 backgroundSpare d-flex justify-content-center">
            <div class="mt-2 descriptionTreeCard">
                <p class="textColor text-center generalText"><span class="fs-2">Accessori</span> compatibili con montainbike o biciclette da corsa</p>
                {{-- <p class="textColor text-center"></p> --}}
                <div class=" d-flex justify-content-center">
                    <a href="{{route('extra.index')}}">
                        <button class="button generalText">Guarda gli accessori</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 backgroundExtra d-flex justify-content-center">
            <div class="mt-2 descriptionTreeCard">
                <p class="textColor text-center generalText"><span class="fs-2">Ricambi</span> selezionati e scelti dai nostri esperti nel settore</p>
                <p class="textColor text-center"></p>
                <div class=" d-flex justify-content-center">
                    <a href="{{route('spare.index')}}">
                        <button class="button generalText">Cerca i ricambi</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END WITH 3 DIV WITH BIKES SPARES EXTRAS --}}

{{-- START WHITE SPACE --}}
<div class="container mt-5">
    <div class="row">
        <div class="text-center">
            <img id="logo" src="/media/logoArancio.png" alt="">
            <h3 class="fs-1 generalText fw-bold">Dai un'occhiata</h3>
            <p class="brandFont fs-3 text-muted">Scorri verso destra e scopri altri annunci</p>
        </div>
    </div>
</div>
{{-- END WHITE SPACE --}}

{{-- START CAROSEL --}}
{{-- ---------FUNZIONANTE --}}
{{-- <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
space-between="30" free-mode="true">
<swiper-slide>Slide 1</swiper-slide>
<swiper-slide>Slide 2</swiper-slide>
<swiper-slide>Slide 3</swiper-slide>
<swiper-slide>Slide 4</swiper-slide>
<swiper-slide>Slide 5</swiper-slide>
<swiper-slide>Slide 6</swiper-slide>
<swiper-slide>Slide 7</swiper-slide>
<swiper-slide>Slide 8</swiper-slide>
<swiper-slide>Slide 9</swiper-slide>
</swiper-container> --}}




{{-- --------carosel bikes --}}
<swiper-container class="mySwiper pb-5" pagination="true" pagination-clickable="true" slides-per-view="2"
space-between="30" free-mode="true">
@foreach($bikes as $bike)
<swiper-slide>
    <div>
        <img src="{{Storage::url($bike->photo)}}" class="card-img-top img-fluid" alt="...">
        <h3>{{$bike->brand}}</h3>
        <a href="{{route('bike.show', compact('bike'))}}">
            <button class="button generalText text-dark">Dettagli</button>
        </a>
        {{-- <p class="fst-italic text-muted">{{$bike->user->name}}</p> --}}
        
    </div>
</swiper-slide>
@endforeach
</swiper-container>

{{-- ----------carosel spare --}}
    
<div class="separationGradient"></div>
<div class="container mt-5">
    <div class="row">
        <div class="text-center">
            <img id="logo" src="/media/logoArancio.png" alt="">
            <h3 class="fs-1 generalText fw-bold">Ricambi</h3>
            <p class="brandFont fs-3 text-muted">Gli ultimi ricambi inseriti</p>
        </div>
    </div>
</div>
<swiper-container class="mySwiper pb-5" pagination="true" pagination-clickable="true" slides-per-view="2"
space-between="30" free-mode="true">
@foreach($spares as $spare)
<swiper-slide>
    <div>
        <img src="{{Storage::url($spare->photo)}}" class="card-img-top img-fluid" alt="...">
        <p class="fst-italic">Marchio</p>
        <h3>{{$spare->brand}}</h3>
        <a href="{{route('spare.show', compact('spare'))}}">
            <button class="button generalText text-dark">Dettagli</button>
        </a>
        {{-- <p class="fst-italic text-muted">{{$bike->user->name}}</p> --}}
        
    </div>
</swiper-slide>
@endforeach
</swiper-container>

{{-- --------extra carosel --}}
<div class="separationGradient"></div>
<div class="container mt-5">
    <div class="row">
        <div class="text-center">
            <img id="logo" src="/media/logoArancio.png" alt="">
            <h3 class="fs-1 generalText fw-bold">Cerca tra gli accessori</h3>
            <p class="brandFont fs-3 text-muted">Compatibili con diversi marchi e modelli</p>
        </div>
    </div>
</div>
<swiper-container class="mySwiper pb-5" pagination="true" pagination-clickable="true" slides-per-view="2"
space-between="30" free-mode="true">
@foreach($extras as $extra)
<swiper-slide>
    <div>
        <img src="{{Storage::url($extra->photo)}}" class="card-img-top img-fluid" alt="...">
        <h3>{{$extra->brand}}</h3>
        <a href="{{route('extra.show', compact('extra'))}}">
            <button class="button generalText text-dark">Dettagli</button>
        </a>
        {{-- <p class="fst-italic text-muted">{{$bike->user->name}}</p> --}}
        
    </div>
</swiper-slide>
@endforeach
</swiper-container>
{{-- END CAROSEL --}}

{{-- START FEEDBACK --}}
<section class="feedback">
    <div class="text-center">
        <img class="mt-5" id="logo" src="/media/logoArancio.png" alt="">
        <h3 class="fs-1 generalText text-white fw-bold">Su di noi</h3>
        <p class="brandFont fs-3 text-muted">Clienti felici</p>
    </div>
    <div class="containerBlurFeedBack feedBackBlur mx-auto d-flex align-items-center">
        <div class="p-3">
            <h3 class="generalText textColor fontSizeFeedBack">
                "La mia nuova bici acquistata su questo sito è fantastica! Perfetta per le mie escursioni in montagna e dal design moderno e accattivante. Consiglio vivamente!"
            </h3>
            <p class="fst-italic fw-lighter text-white fs-4">Michele.</p>
        </div>
    </div>
</section>
{{-- END FEEDBACK --}}


    {{-- <x-header>  
        Mobike
    </x-header> --}}

    @if(session('userDeleted'))
        <div class="alert alert-success">
            {{session('userDeleted')}}
        </div>
    @endif
    
    {{-- <div class="container-fluid background">
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
    </div> --}}
{{-- ANIMAZIONE --}}
<div class="camion d-flex">
    ciao
    <div class="loop-wrapper">
        <div class="mountain"></div>
        <div class="hill"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="rock"></div>
        <div class="truck"></div>
        <div class="wheels"></div>
    </div> 
    ciao
</div>
</x-layout>



