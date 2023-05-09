<x-layout>
    <x-header>
        Inserisci un annuncio
        <p class="fs-5 text-muted fst-italic">Oppure inserisci un:</p>
        <a class="text-decoration-none" href="{{route('extra.create')}}">
            <button class="button generalText fs-2 text-dark">Accessorio</button>
        </a>
        <a class="text-decoration-none" href="{{route('spare.create')}}">
            <button class="button generalText fs-2 text-dark">Ricambio</button>
        </a>
    </x-header>
    <div class="containerCreate">
        <div class="containerCreateForm mt-5 mb-5">
            <div class="brandContainer mt-3">
                <div>
                    <h2 class="brandFont fs-1"><span class="colorFont">M</span>obike</h2>
                    <p class="fst-italic text-muted">Bicicletta</p>
                </div>
            </div>
            <form class="p-3" method="POST" action="{{route('bike.store')}}" enctype="multipart/form-data">
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
                    <label for="name" class="form-label">Modello</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Marchio</label>
                    <input type="text" name="brand" class="form-control" id="brand">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Inserisci una foto</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="double" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="spare" class="form-label">Scegli compatibilità</label>
                    <select name="spares[]" id="spare" class="form-control" multiple>
                        @foreach($spares as $spare)
                            <option value="{{$spare->id}}">
                                {{$spare->brand}}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="button generalText text-dark">Inserisci Annuncio</button>
            </form>
        </div> 
    </div>





{{-- <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-5 border shadow" method="POST" action="{{route('bike.store')}}" enctype="multipart/form-data">
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
                    <label for="name" class="form-label">Modello</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Marchio</label>
                    <input type="text" name="brand" class="form-control" id="brand">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="double" name="price" class="form-control" id="price">
                </div>

                <div class="mb-3">
                    <label for="spare" class="form-label">Scegli compatibilità</label>
                    <select name="spares[]" id="spare" class="form-control" multiple>
                        @foreach($spares as $spare)
                            <option value="{{$spare->id}}">
                                {{$spare->brand}}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Inserisci Annuncio</button>
                </form>
        </div>
    </div>
</div> --}}

</x-layout>