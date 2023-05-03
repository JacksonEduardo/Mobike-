<x-layout>

    {{-- <x-header>
        Registrati
    </x-header> --}}

<div class="registerContainer">
    <div class="containerBlocks ">
        <div class="registerLeft">
            <img class="logoRocketRegister" src="/media/rocket.png" alt="">
        </div>
        <div class="registerRight">
            <form class="p-3" method="POST" action="{{route('register')}}">
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
                <label for="email" class="form-label">Indirizzo email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome utente</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
            <div class="buttonRegister">

                <button type="submit" class="button generalText text-dark">Registrati</button>
                
               <p class="mt-3 ms-3 me-3 generalText fw-bold">oppure</p>
                <a class="text-decoration-none" href="{{route('login')}}">
                    <p class="button generalText text-dark m-0">Accedi</p>
                </a>
            </div>
          </form>
        </div>
    </div>
</div>
















    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="p-5 border shadow" method="POST" action="{{route('register')}}">
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
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div> --}}

</x-layout>