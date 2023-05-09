<x-layout>
    <x-header>
        Sei nella zona di modifica del tuo articolo
        <p class="generaltext text-muted fst-italic fs-5">Sezione accessori</p>
    </x-header>

    {{-- new form --}}
    <div class="containerEdit">
        <div class="containerFotoForm mt-5 mb-5">
            <div class="editFoto p-2">
                <label for="photoEsistente" class="form-label">La foto attuale</label>
                <img class="imgEdit rounded" src="{{Storage::url($extra->photo)}}" alt="">
            </div>
            <div class="editForm">
                <form class="p-3" method="POST" action="{{route('extra.update', compact('extra'))}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                    <label for="brand" class="form-label">Inserisci il marchio</label>
                    <input type="text" name="brand" class="form-control" id="brand" value="{{$extra->brand}}">
                    </div>
    
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il modello</label>
                        <input type="text" class="form-control" name="name" id="name"  value="{{$extra->name}}">
                    </div>
    
                    <div class="mb-3">
                        <label for="price" class="form-label" >Inserisci il prezzo</label>
                        <input type="double" name="price" class="form-control" id="price" value="{{$extra->price}}">
                    </div>
    
                    <div class="mb-3">
                        <label for="photo" class="form-label">Inserisci una foto</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label" >Inserisci una breve descrizione</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{$extra->description}}">
                    </div>
                    <button type="submit" class="button generalText text-dark my-2">Conferma modifiche</button>
                    <a href="{{route('extra.index')}}" class="text-decoration-none button generalText text-dark my-2">torna indieto</a>
                </form>
            </div>

        </div>
    </div>

</x-layout>