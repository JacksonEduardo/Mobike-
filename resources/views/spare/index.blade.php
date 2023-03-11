<x-layout>

<x-header>
    Tutti i ricambi
</x-header>

@if(session('spareCreated'))
        <div class="alert alert-success">
            {{session('spareCreated')}}
        </div>
    @endif

<div class="container my-5">
    <div class="row justify-content-center">
        @if(count($spares) > 0)
            @foreach($spares as $spare)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($spare->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$spare->brand}}</h5>
                    <a href="{{route('spare.show', compact('spare'))}}" class="btn btn-primary">Dettagli</a>
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