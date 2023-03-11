<x-layout>

    <x-header>
        Modifica annuncio
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border shadow" method="POST" action="{{route('bike.update', compact('bike'))}}" enctype="multipart/form-data">          
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
                        <label for="photoEsistente" class="form-label">Foto Attuale</label>
                        <img style="width: 200px" src="{{Storage::url($bike->photo)}}" alt="">
                    </div>                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo €</label>
                        <input type="double" name="price" class="form-control" id="price" value="{{$bike->price}}">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Aggiorna Annuncio</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>