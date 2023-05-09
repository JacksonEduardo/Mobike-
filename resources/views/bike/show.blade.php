<x-layout>
    <x-header>
        Pagina di dettaglio
    </x-header>

    <div class="containerShow">
        <div class="left">
            <img class="imgShow shadow" src="{{Storage::url($bike->photo)}}" alt="...">
        </div>
        <div class="right p-5">
            <h1 class="generalText fw-bold">{{$bike->brand}}</h1>
            <p class="generalText fs-2 fst-italic">{{$bike->name}}</p>
            <p class="generalText fs-4">{{$bike->price}} €</p>
            @if(count($bike->spares) > 0)
                <hr>
                <ul>
                    @foreach($bike->spares as $spare)
                        <p class="generalText fs-6">Compatibile con ricambio marchio: {{$spare->brand}}</p>
                        <p class="generalText fs-6">Descrizione: {{$spare->description}}</p>
                        <p class="date">Inserito il: {{$bike->created_at}}</p>
                    @endforeach
                </ul>
                <hr>
            @endif
            @if(Auth::user() && Auth::id() == $bike->user_id)
                <div>
                    <a class="text-decoration-none" href="{{route('bike.edit', compact('bike'))}}">
                        <button type="button" class="button mb-4 text-black">Modifica</button>
                    </a>
                    <form method='POST' action="{{route('bike.destroy', compact('bike'))}}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mx-3 my-auto btn btn-danger">Ellimina</button>  
                    </form>
                </div>
            @endif
            <a href="{{route('bike.index')}}">
                <button class="button mt-3 mb-5 text-black">Indietro</button>
            </a>
        </div>
    </div>

</x-layout>