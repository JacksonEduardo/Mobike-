<x-layout>

    <x-header>
        Inserisci un ricambio
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border shadow" method="POST" action="{{route('spare.store')}}" enctype="multipart/form-data">
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
                        <label for="brand" class="form-label">Modello</label>
                        <input type="text" name="brand" class="form-control" id="brand">

                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" class="form-control" id="description">

                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" name="photo" class="form-control" id="photo">

                        <div class="mb-3">
                            <label for="bike" class="form-label">Scegli compatibilità</label>
                            <select name="bikes[]" id="bike" class="form-control" multiple>
                                @foreach($bikes as $bike)
                                    <option value="{{$bike->id}}">
                                        {{$bike->brand}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form> 
            </div>
        </div>
    </div>

       

</x-layout>