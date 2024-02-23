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
                <div class="col-6">
                    <ul class=" d-flex flex-wrap">
                        @foreach($linkFooter as $key => $link)
                        <li class="m-3">
                            <h4 class=" text-white ">
                                {{$key}}
                            </h4>
                            <ul class="list-unstyled">
                                @foreach($link as $key=> $singleLink)
                                <li class="color-list">
                                    {{$singleLink}}
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                    <p class="color-list p-4" >
                        All Site Content TIM and 2020 DC Entertaiment, unless otherwise noted here. ALl rights reserverd.<br>Cookies Settigs
                    </p>
                </div>
                <div class="col-6 img-col-dc">

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
