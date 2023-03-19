<x-layout>
    <x-header>
        {{$extra->brand}}
    </x-header>
    <div class="container-fluid my-5 background">
        <div class="row">
            <div class="col-12 col-md-12 my-5">
                <div class="our_solution_category">
                    <div class="solution_cards_box d-flex">
                        <div class="solution_card">
                            <div class="hover_color_bubble"></div>
                            <div class="so_top_icon">
                                <img src="{{Storage::url($extra->photo)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="solu_title">
                                <h3>{{$extra->brand}}</h3>
                            </div>
                            <div class="solu_description">
                                <p>{{$extra->name}}</p>
                                <p>{{$extra->description}}</p>
                                <p>{{$extra->price}} €</p>
                                <a href="{{route('extra.index', compact('extra'))}}">
                                    <button type="button" class="read_more_btn">Indietro</button>
                                </a>
                                @if(Auth::user() && Auth::id() == $extra->user_id)                                                                
                                    <a href="{{route('extra.edit', compact('extra'))}}">
                                        <button type="button" class="read_more_btn">Modifica</button>
                                    </a>
                                    <form method='POST' action="{{route('extra.destroy', compact('extra'))}}" class="d-inline mt-2">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Ellimina</button>  
                                    </form>
                                @endif
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>