
<x-layout>
    
@if(session('userDeleted'))
    <div class="alert alert-success">
        {{session('userDeleted')}}
    </div>
@endif

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

{{-- START REGISTRATION QUESTION --}}
@Auth
<section class="container registrationQuestion">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-7">
            <h3 class="generalText fs-1">Essendo già registrato su <span class="colorFont brandFont">M</span><span class="brandFont">obike</span></h3>
            <p class="generalText fs-5 text-muted fst-italic">Puoi pubblicare i tuoi prodotti come biciclette, ricambi e accessori</p>
        </div>
        <div class="col-12 col-md-5">
            <a class="text-decoration-none" href="{{route('bike.create')}}">
                <button class="button generalText text-dark">Biciclette</button>
            </a>
            <a class="text-decoration-none" href="{{route('spare.create')}}">
                <button class="button generalText text-dark">Ricambi</button>
            </a>
            <a class="text-decoration-none" href="{{route('extra.create')}}">
                <button class="button generalText text-dark">Extra</button>
            </a>
        </div>
    </div>
</section>
@else
<section class="container registrationQuestion">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-md-7">
            <h3 class="generalText fs-1">Ti sei già registrato su <span class="colorFont brandFont">Mobike</span>?</h3>
            <p class="generalText fs-5 text-muted fst-italic">Registrandoti hai la possibilità di avere ulteriori sconti</p>
        </div>
        <div class="col-12 col-md-5">
            <a class="text-decoration-none" href="{{route('register')}}">
                <button class="button generalText text-dark">Registrati</button>
            </a>
            <a class="text-decoration-none" href="{{route('login')}}">
                <button class="button generalText text-dark">Accedi</button>
            </a>
        </div>
    </div>
</section>
@endif
{{-- END REGISTRATION QUESTION --}}
</x-layout>



