<x-layout>
    
    <x-header>  
        Mobike
    </x-header>
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach($bikes as $bike)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($bike->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$bike->name}}</h5>
                        <p class="card-text">{{$bike->brand}}</p>
                        <a href="{{route('bike.show', compact('bike'))}}" class="btn btn-primary">Scopri di più</a>
                        {{-- <a href="{{route('bike.edit', compact('bike'))}}" class="btn btn-primary">Modifica annuncio</a> --}}
                        
                        {{-- <form method='POST' action="{{route('bike.destroy', compact('bike'))}}" class="d-inline mt-2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Ellimina</button>  
                        </form> --}}
                    </div>
                </div>           
            </div>
            @endforeach
            
            @foreach($spares as $spare)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($spare->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$spare->name}}</h5>
                        <p class="card-text">{{$spare->brand}}</p>
                        <a href="{{route('spare.show', compact('spare'))}}" class="btn btn-primary">Scopri di più</a>
                        {{-- <a href="{{route('spare.edit', compact('spare'))}}" class="btn btn-primary">Modifica annuncio</a> --}}
                    </div>
                </div>           
            </div>
            @endforeach
        </div>
    </div>
</x-layout>