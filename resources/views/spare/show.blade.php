<x-layout>

    <x-header>
        Dettagli prodotto
    </x-header>



    <div class="containerShow">
        <div class="left">
            <img class="imgShow shadow" src="{{Storage::url($spare->photo)}}" alt="...">
        </div>
        <div class="right p-5">
            <h1 class="generalText fw-bold">{{$spare->brand}}</h1>
            <p class="generalText fs-2 fst-italic">{{$spare->description}}</p>
            @if(count($spare->bikes) > 0)
                <hr>
                <ul>
                    @foreach($spare->bikes as $bike)
                        <p class="generalText fs-6">Compatibile con ricambio marchio: {{$bike->brand}}</p>
                        <p class="generalText fs-6">Modello: {{$bike->name}}</p>
                        <p class="date">Inserito il: {{$spare->created_at}}</p>
                    @endforeach
                </ul>
                <hr>
            @endif
            @if(Auth::user() && Auth::id() == $spare->user_id)
                <div>
                    <a class="text-decoration-none" href="{{route('spare.edit', compact('spare'))}}">
                        <button type="button" class="button mb-4 text-black">Modifica</button>
                    </a>
                    <form method='POST' action="{{route('spare.destroy', compact('spare'))}}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="mx-3 my-auto btn btn-danger">Ellimina</button>  
                    </form>
                </div>
            @endif
            <a href="{{route('spare.index')}}">
                <button class="button mt-3 mb-5 text-black">Indietro</button>
            </a>
        </div>
    </div>

</x-layout>