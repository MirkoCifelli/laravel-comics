@php
    $links = [
        [
            'url' => '/',
            'label' => 'Characters',
            'active' => false,
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '/movie',
            'label' => 'Movie',
            'active' => false,
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false,
        ],
        [
            'url' => '/games',
            'label' => 'Games',
            'active' => false,
        ],
        [
            'url' => '/collectibles',
            'label' => 'Collectibles',
            'active' => false,
        ],
        [
            'url' => '/videos',
            'label' => 'Videos',
            'active' => false,
        ],
        [
            'url' => '/fans',
            'label' => 'Fans',
            'active' => false,
        ],
        [
            'url' => '/news',
            'label' => 'News',
            'active' => false,
        ],
        [
            'url' => '/shop',
            'label' => 'Shop',
            'active' => false,
        ]
 ];
@endphp

<header>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="img-logo p-3">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-8">
                
                    <nav>
                        <ul class="d-flex justify-content-between list-unstyled p-4">
                            @foreach ($links as $link)
                                <li class="m-2">
                                    @if ($link['active'])
                                        <a href="{{ $link['url'] }}" class=" text-uppercase ">
                                            {{ $link['label'] }}
                                        </a>
                                    @else
                                        <del class="text-uppercase">
                                            {{ $link['label'] }}
                                        </del>
                                    @endif
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
