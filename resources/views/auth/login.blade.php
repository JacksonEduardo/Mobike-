<x-layout>
{{-- 
    <x-header>
        Accedi
    </x-header>

     --}}

     <div class="registerContainer">
        <div class="containerBlocks ">
            <div class="registerLeft">
                <img class="logoRocketRegister" src="/media/rocket.png" alt="">
            </div>
            <div class="registerRight">
                <form class="p-3" method="POST" action="{{route('login')}}">
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
                        <label for="email" class="form-label generalText fw-bold">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label generalText fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <button type="submit" class="button generalText text-dark">Accedi</button>

                    
                    <p class="mt-3 generalText fw-bold">Non sei ancora registrato?</p>
                    <a class="text-decoration-none" href="{{route('register')}}">
                        <p class="text-dark d-flex align-items-center generalText fw-bold">Fallo qui! ci vorranno pochi secondi <span><img class="ms-2" src="/media/typewritting.png" alt=""></span></p>
                    </a>
                </form>
            </div>
        </div>
    </div>




{{-- 
<div class="container">
    
</div>

<div class="container-fluid backgroundLogin">
    <div class="row m-0 h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center ">
            <div class="square blurLoginLeft d-flex align-items-center justify-content-center">
                <img class="logoRocket" src="/media/rocket.png" alt="">
            </div>
            <form class="squareOne blurLoginRight p-3" method="POST" action="{{route('login')}}">
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
                    <label for="email" class="form-label generalText fw-bold">Indirizzo email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label generalText fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-primary generalText">Accedi</button>
                
                <p class="mt-3 generalText fw-bold">Non sei ancora registrato?</p>
                <a class="text-decoration-none" href="{{route('register')}}">
                    <p class="text-dark d-flex align-items-center generalText fw-bold">Fallo qui! ci vorranno solo 30 secondi <span><img class="ms-2" src="/media/typewritting.png" alt=""></span></p>
                </a>
                
            </form>
        </div>
    </div>
</div> --}}


    {{-- <div class="container h-100 my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border shadow" method="POST" action="{{route('login')}}">
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
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <p class="mt-3 generalText fw-bold">Non sei ancora registrato?</p>
                    <a class="text-decoration-none" href="{{route('register')}}">
                        <p class="text-dark d-flex align-items-center generalText fw-bold">Fallo qui! ci vorranno solo 30 secondi <span><img class="ms-2" src="/media/typewritting.png" alt=""></span></p>
                    </a>
                  </form>
            </div>
        </div>
    </div> --}}

</x-layout>