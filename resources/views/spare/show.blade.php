<x-layout>

    <x-header>
        Dettagli prodotto
    </x-header>
    <div class="container-fluid my-5 background">
        <div class="row mb-5">
            <div class="col-12 col-md-12">
                <div class="our_solution_category">
                    <div class="solution_cards_box">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <img src="{{Storage::url($spare->photo)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="solu_title">
                                <h3>{{$spare->brand}}</h3>
                            </div>
                            <div class="solu_description">
                                <p>{{$spare->description}}</p>
                                <a href="{{route('spare.index', compact('spare'))}}">
                                    <button type="button" class="read_more_btn">Indietro</button>
                                </a>
                                <a href="{{route('spare.edit', compact('spare'))}}">
                                    <button type="button" class="read_more_btn">Modifica</button>
                                </a>
                                <form method='POST' action="{{route('spare.destroy', compact('spare'))}}" class="d-inline mt-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Ellimina</button>  
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>