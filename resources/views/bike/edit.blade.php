<x-layout>

    <x-header>
        Sei nella zona di modifica del tuo articolo
        <p class="generaltext text-muted fst-italic fs-5">Sezione Biciclette</p>
    </x-header>

    <div class="containerEdit">
        <div class="containerFotoForm mt-5 mb-5">
            <div class="editFoto p-2">
                <label for="photoEsistente" class="form-label">La foto attuale</label>
                <img class="imgEdit rounded" src="{{Storage::url($bike->photo)}}" alt="">
            </div>
            <div class="editForm">
                <form class="p-3" method="POST" action="{{route('bike.update', compact('bike'))}}" enctype="multipart/form-data">          
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Modello</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$bike->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marchio</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{$bike->brand}}">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>
                    
                    <div class="mb-3">
                        <label for="spare" class="form-label">Compatibile con</label>
                        <select name="bikes[]" id="bike" class="form-control" multiple>
                            @foreach($spares as $spare)
                                <option value="{{$spare->id}}"
                                    @if($bike->spares->contains($spare)) selected @endif
                                    >
                                    {{$spare->brand}}
                                </option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo €</label>
                        <input type="double" name="price" class="form-control" id="price" value="{{$bike->price}}">
                    </div>                    
                    <button type="submit" class="button generalText text-dark my-2">Conferma modifiche</button>
                    <a href="{{route('bike.index')}}" class="text-decoration-none button generalText text-dark my-2">torna indieto</a>
                  </form>
            </div>
        </div>
    </div>
</x-layout>