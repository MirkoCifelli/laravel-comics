@php
    $links = [
        [
            'url' => '/',
            'label' => 'Characters',
            
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
            
        ],
        [
            'url' => '/movie',
            'label' => 'Movie',
            
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            
        ],
        [
            'url' => '/games',
            'label' => 'Games',
            
        ],
        [
            'url' => '/collectibles',
            'label' => 'Collectibles',
            
        ],
        [
            'url' => '/videos',
            'label' => 'Videos',
            
        ],
        [
            'url' => '/fans',
            'label' => 'Fans',
            
        ],
        [
            'url' => '/news',
            'label' => 'News',
            
        ],
        [
            'url' => '/shop',
            'label' => 'Shop',
            
        ]
 ];
@endphp

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-end ">
                    <div>
                        DC POWER VISA
                    </div>
                    <div class="ms-3">
                        ADDITIONAL DS SITES
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="img-logo p-3">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-8">
                
                    <nav>
                        <ul class="d-flex justify-content-between list-unstyled p-4 ">
                            @foreach ($links as $link)
                                <li class="m-2 ">
                                    
                                    <a href="{{ $link['url'] }}" class=" text-uppercase text-decoration-none text-dark">
                                            {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                
            </div>
            <div class="col-2">
                <div class="mt-4">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
    </div>
</header>
