<x-layout>
    <x-header>
        Pagina di dettaglio
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">       
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($bike->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$bike->name}}</h5>
                        <p class="card-text">{{$bike->brand}}</p>
                        <p class="card-text">{{$bike->price}}€</p>
                        <a href="{{route('bike.index')}}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>