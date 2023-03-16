<x-layout>
    <x-header>
        Tutte le biciclette
    </x-header>
  
    <div class="container">
        <div class="row justify-content-center">
            <h2>Inserisci una foto profilo</h2>
            <form method="POST" action="{{route('changeAvatar', ['user' => Auth::user()])}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="file" name="avatar" class="form-control">
                <button type="submit" class="btn btn-primary">Inserisci Avatar</button>
            </form>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form method="POST" action="{{route('user.destroy')}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Cancella profilo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 background">
        <div class="row">
            <div>
                <h1>Ciao {{Auth::user()->name}}</h1>
                <p>Ecco i tuoi annunci</p>
                <h2>Le mie biciclette</h2>
                <img style="width: 100px; border-radius: 50%" src="{{Storage::url(Auth::user()->avatar)}}" alt="">
            </div>
                @foreach(Auth::user()->bikes as $bike)  
                {{-- @foreach($bikes as $bike)            --}}
                    <div class="col-12 col-md-4">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <div class="so_top_icon">
                                        <img src="{{Storage::url($bike->photo)}}" class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="solu_title">
                                        <h3>{{$bike->brand}}</h3>
                                    </div>
                                    <div class="solu_description">
                                        <p>{{$bike->name}}</p>
                                        <p class="fst-italic text-muted">{{$bike->user->name}}</p>
                                        {{-- @dd($bike->user->name) --}}
                                        <a href="{{route('bike.show', compact('bike'))}}">
                                            <button type="button" class="read_more_btn">Dettagli</button>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>


        <div class="row">
            <h2>I miei ricambi</h2>
                @foreach(Auth::user()->spares as $spare)  
                {{-- @foreach($bikes as $bike)            --}}
                    <div class="col-12 col-md-4">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <div class="so_top_icon">
                                        <img src="{{Storage::url($spare->photo)}}" class="card-img-top img-fluid" alt="...">
                                    </div>
                                    <div class="solu_title">
                                        <h3>{{$spare->brand}}</h3>
                                    </div>
                                    <div class="solu_description">
                                        <p>{{$spare->description}}</p>
                                        <p class="fst-italic text-muted">{{$spare->user->name}}</p>
                                        {{-- @dd($spare->user->name) --}}
                                        <a href="{{route('spare.show', compact('spare'))}}">
                                            <button type="button" class="read_more_btn">Dettagli</button>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</x-layout>
