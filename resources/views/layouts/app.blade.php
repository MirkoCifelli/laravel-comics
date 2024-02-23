@php
$comics = config('comics');
$iconMain = [
    'buy-comics-digital-comics.png',
    'buy-comics-merchandise.png',
    'buy-comics-shop-locator.png',
    'buy-comics-subscriptions.png',
    'buy-dc-power-visa.png',
];
$iconName=[
    'DIGITAL COMICS',
    'DC MERCHANDISE',
    'SUBSCRIPTION',
    'COMIC SHOP LOCATOR',
    'DC POWER VISA'
]
@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title') | Laravel Start 1</title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body>

        @include('partials.header')

        <main>
            <div class="container-fluid jumbotron"></div>

            <div class="container-fluid bg-card">
                <div class="container p-5">
                    <div class="row">
                        @foreach ($comics as $singleComic)
                            <div class="col-2 p-5">
                                
                                 <div class="card">
                                    <div class="img-card">
                                        <img src="{{$singleComic['thumb']}}" alt="">
                                    </div>
                                    <div class="info-card">
                                        {{$singleComic['title']}}
                                    </div>
                                 </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="container">
                   <div class="row p-4 ">
                    <div class="col d-flex  justify-content-center ">
                        <button class="button-special">
                            LOAD MORE
                        </button>
                    </div>
                   </div>
                </div>
            </div>
            <div class="container-fluid bg-blue">
                <div class="container">
                    <div class="row">
                        <div class="col p-3">
                            <ul class="list-unstyled d-flex justify-content-between  ms-3">
                                @foreach ($iconMain as $single)
                                
                                   <li class="m-2">
                                       <img src="{{ Vite::asset('resources/img/'.$single) }}" alt=""> 
                                       
                                   </li>
                                
                                @endforeach    
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('partials.footer')

        {{-- JS da importare nel body --}}
        @yield('body-imports')
    </body>
</html>
