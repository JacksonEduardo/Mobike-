<x-layout>
    <x-header>
        Inserisci accessorio
    </x-header>

 <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-5 border shadow" method="POST" action="{{route('extra.store')}}" enctype="multipart/form-data">
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
                <input type="text" name="brand" class="form-control" id="brand">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Inserisci il modello</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci il prezzo</label>
                    <input type="double" name="price" class="form-control" id="price">
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Inserisci una foto</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci una breve descrizione</label>
                    <input type="text" name="description" class="form-control" id="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</x-layout>