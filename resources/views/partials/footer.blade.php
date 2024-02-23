@php
$linkFooter =[
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
];
$socialFooter =[
    'footer-facebook.png',
    'footer-twitter.png',
    'footer-youtube.png',
    'footer-pinterest.png',
    'footer-periscope.png'
]


@endphp


<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        @foreach ($linkFooter as $link)
                        {{-- <li>
                            {{ $link }}
                        </li> --}}
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button class="buttom">
                        SHOP UP NOW
                    </button>
                </div>
                <div class="col d-flex justify-content-end ">
                    <Span class=" text-info d-flex p-2">FOLLOW US</Span>
                    
                    <ul class="list-unstyled d-flex justify-content-end ms-3">
                         @foreach ($socialFooter as $singleSocial)
                            <li class="m-2 color-footer">
                                <img src="{{ Vite::asset('resources/img/'.$singleSocial) }}" alt=""> 
                            </li>
                         @endforeach    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</footer>
