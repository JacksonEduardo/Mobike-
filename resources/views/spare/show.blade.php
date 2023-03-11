<x-layout>

    <x-header>
        Dettagli prodotto
    </x-header>
    <div class="container">
        <div class="row col-12 col-md-3">
            <div class="card">
                <img src="{{Storage::url($spare->photo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$spare->brand}}</h5>
                  <p class="card-text">{{$spare->description}}</p>
                  <a href="{{route('spare.index')}}" class="btn btn-primary">torna indieto</a>
                  <a href="{{route('spare.edit', compact('spare'))}}" class="btn btn-primary">Modifica</a>
                </div>
                <form method='POST' action="{{route('spare.destroy', compact('spare'))}}" class="d-inline mt-2">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Ellimina</button>  
                </form>
            </div>
        </div>
    </div>
   

</x-layout>