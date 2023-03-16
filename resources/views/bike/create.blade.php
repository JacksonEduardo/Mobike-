<x-layout>

    <x-header>
        Inserisci un annuncio
    </x-header>

    <div class="container my-5">
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
                        <label for="spare" class="form-label">Compatibile con</label>
                        <select name="spare" id="spare" class="form-control">
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
    </div>

</x-layout>