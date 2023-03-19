<x-layout>

    <x-header>
        Modifica l'articolo
    </x-header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-5 border shadow" method="POST" action="{{route('spare.update', compact('spare'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                            <label for="brand" class="form-label">Modello</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{$spare->brand}}">
    
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{$spare->description}}">
    
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                        <select name="spares[]" id="spare" class="form-control" multiple>
                            @foreach($bikes as $bike)
                                <option value="{{$bike->id}}"
                                    @if($spare->bikes->contains($bike)) selected @endif
                                    >
                                    {{$bike->brand}}
                                </option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label for="photoEsistente" class="form-label">La foto attuale</label>
                            <img style="width: 200px" src="{{Storage::url($spare->photo)}}" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">Conferma modifiche</button>
                        <a href="{{route('spare.index')}}" class="btn btn-primary">torna indieto</a>       
                </form>
            </div>
    </div>
</div>

</x-layout>


{{-- <div class="container">
    <div class="row col-12 col-md-3">
        <form class="p-5 bordaer shadow" method="POST" action="{{route('spare.update', compact('spare'))}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="brand" class="form-label">Modello</label>
            <input type="text" name="brand" class="form-control" id="brand">

            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" class="form-control" id="description">

            <label for="photo" class="form-label">Foto</label>
            <input type="file" name="photo" class="form-control" id="photo">
            <div class="mb-3">
                <label for="photoEsistente" class="form-label">La foto attuale</label>
                <img style="width: 200px" src="{{Storage::url($spare->photo)}}" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div> --}}