<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- SCRIPT LETTERS WELCOME --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- SCRIPT SWIPER --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Praise&family=Titillium+Web&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Mobike</title>
</head>
<body>

    <x-navbar/>
    
    <div>
        {{$slot}}
    </div>

    <x-footer/>

</body>