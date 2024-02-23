@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header>
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                
                    <nav>
                        <ul class="d-flex justify-content-between ">
                            @foreach ($links as $link)
                                <li>
                                    @if ($link['active'])
                                        <a href="{{ $link['url'] }}">
                                            {{ $link['label'] }}
                                        </a>
                                    @else
                                        <del>
                                            {{ $link['label'] }}
                                        </del>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                
            </div>
            <div class="col"></div>
        </div>
    </div>
</header>
