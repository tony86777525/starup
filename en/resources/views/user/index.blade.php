@extends('user.basic.wrapper')

@push('meta')
    <title>Startup Portal Taiwan</title>
    <meta name="description" content="Startup Portal Taiwan is provided by the Small and Medium Enterprise and Startup Administration, Ministry of Economic Affairs (MOEA SMESA) to help more international entrepreneurs to start their business in Taiwan.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Startup Portal Taiwan">
    <meta property="og:description" content="Startup Portal Taiwan is provided by the Small and Medium Enterprise and Startup Administration, Ministry of Economic Affairs (MOEA SMESA) to help more international entrepreneurs to start their business in Taiwan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.index') }}">
    <meta property="og:image" content="{{ asset('assets/img/taipei.jpg') }}">
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/index.css') }}" />
@endPush

@section('main')
    <div class="sharethis-inline-share-buttons st-right  st-inline-share-buttons st-animated"
         style="z-index: 2;position: fixed;right: 65px;bottom: 42px;" id="st-1">
        <div class="st-btn st-first  st-remove-label" data-network="sharethis" style="display: inline-block;">
            <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="email" style="display: inline-block;">
            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="facebook" style="display: inline-block;">
            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

        </div>
        <div class="st-btn  st-remove-label" data-network="twitter" style="display: inline-block;">
            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">

        </div>
        <div class="st-btn st-last  st-remove-label" data-network="linkedin" style="display: none;">
            <img alt="linkedin sharing button" src="https://platform-cdn.sharethis.com/img/linkedin.svg">

        </div>
    </div>
    <section class="banner-section">
        <div class="banner-overlay" style="width: 100%;height: 100%;position: absolute;z-index: 1;">
            <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.3);width: 100%;height: 100%;"></div>
        </div>
        <div class="banner-image" id="banner-image"
             style="background-image:url('{{ asset('assets/img/taipei.jpg') }}');opacity:1;"></div>
        <h1 class="SIbanner-text">
            Come to Taiwan &amp; make your business thrive
        </h1>
    </section>
    <h2 class="subtitle"><a title="About Us" href="http:///" hreflang="en" style="color: #222831;">About Us</a>
    </h2>
    <section class="container mt-4">
        <div class="row">
            <div class="text-center col-lg-3 col-md-6">
                <a title="About Taiwan" href="#AboutTaiwan"><img alt="icon" class="pic" src="{{ asset('assets/img/icon1.png') }}"></a>
                <h3 class="title3"><a title="About Taiwan" href="#AboutTaiwan">About Taiwan</a></h3>
                <div class="title4">Learn more about Taiwan and get our chracteristics</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <img alt="icon" class="pic" data-toggle="collapse" data-target="#demo"
                     src="{{ asset('assets/img/icon2.png') }}">
                <h3 class="title3" data-toggle="collapse" data-target="#demo">Permit &amp; Regulations</h3>
                <div id="demo" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
                    <a title="Visas" href="{{ route('user.permit') }}" hreflang="en"
                       style="color: #222831;font-weight: bold;">Visas</a>
                    <br>
                    <a title="Incorporation" href="{{ route('user.incorporation') }}" hreflang="en" style="color: #222831;font-weight: bold;">Incorporation</a>
                </div>
                <div class="title4">Know what you have to do before working in Taiwan</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <img alt="icon" class="pic" data-toggle="collapse" data-target="#demo1"
                     src="{{ asset('assets/img/icon3.png') }}">
                <h3 class="title3" data-toggle="collapse" data-target="#demo1">Service</h3>
                <div id="demo1" class="collapse" style="background-color:rgba(0,0,0,0.1);border-radius:5px;">
                    <a title="Incubator &amp; Accelerator" href="{{ route('user.ia') }}" hreflang="en"
                       style="color: #222831;font-weight: bold;">Incubator &amp; Accelerator</a>
                    <br>
                    <a title="Government Incentive" href="{{ route('user.incentive') }}" hreflang="en"
                       style="color: #222831;font-weight: bold;">Government Incentive</a>
                    <br>
                    <a title="Chamber &amp; Community" href="{{ route('user.cc') }}" hreflang="en"
                       style="color: #222831;font-weight: bold;">Chamber &amp; Community</a>
                </div>
                <div class="title4">Get more services and resources from the government</div>
            </div>
            <div class="text-center col-lg-3 col-md-6">
                <a title="News &amp; Story" href="#carouselExampleControls"><img alt="icon" class="pic" src="{{ asset('assets/img/icon4.png') }}"></a>
                <h3 class="title3"><a title="News &amp; Story" href="#carouselExampleControls">News &amp; Story</a></h3>
                <div class="title4">Obtain the news and stories about entrepreneurship</div>
            </div>
        </div>
    </section>

    <section class="entity mb-5" id="AboutTaiwan">
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="{{ asset('assets/img/introduction.jpeg') }}" alt="introduction">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <div style="float:left;">
                            <img alt="earth" src="{{ asset('assets/img/earth.png') }}"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LOCATION</p>
                                <p style="margin-bottom:3px;" class="Introduction">Taiwan sits at the center of the Asia
                                    Pacific region</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="airplane" src="{{ asset('assets/img/airplane.png') }}"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">TRAFFIC</p>
                                <p style="margin-bottom:3px;" class="Introduction">Convenient public transportation
                                    systems</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="hat" src="{{ asset('assets/img/hat.png') }}"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">EDUCATED WORKFORCE</p>
                                <p style="margin-bottom:3px;" class="Introduction">Large and highly educated workforce
                                    pool</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="computer" src="{{ asset('assets/img/computer.png') }}"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;" class="IT">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">IT CLUSTER</p>
                                <p style="margin-bottom:3px;" class="Introduction">IT industrial cluster plays a critical
                                    role</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div style="float:left;margin-top:10px;">
                            <img alt="handshake" src="{{ asset('assets/img/handshake.png') }}"
                                 style="width:40px;height:40px;float:left;">
                            <div style="display:inline-block;margin-left:12px;">
                                <p style="letter-spacing: 3px;margin-bottom:3px;font-weight:bold;">LEGAL ENVIRONMENT</p>
                                <p style="margin-bottom:3px;width:auto;" class="Introduction">A rigorous legal and
                                    regulatory environment for<br>intellectual property and foreign investment</p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </section>
    <section class="container mb-5 mt-2">
        <div class="row">
            <div class="col-sm-12 col-lg-6 intro-text">
                <p class="video-title">Sincere talk of enterprises</p>
                <p class="mb-3">Welcome to Taiwan to start your own business. Use Startup Portal Taiwan to find your own
                    business positioning and unique market opportunities.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/0VsiUPlReHk?si=oSyFyeIRHSmPkRsJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            @if($news->isNotEmpty())
                @foreach($news as $item)
                    <div class="carousel-item @if($news->first() === $item) active @endif">
                        <div class="container">
                            <div class="row">
                                @if($item->isNotEmpty())
                                    @foreach($item as $data)
                                        <div class="col-4">
                                            <a href="{{ route('user.news-content', ['news_id' => $data->id]) }}"><img class="pic2" src="{{ $data->image }}"></a>
                                            <p class="title5"><a href="{{ route('user.news-content', ['news_id' => $data->id]) }}">{{ \Illuminate\Support\Str::limit(\Illuminate\Support\Str::of($data->title)->stripTags(), 45) }}</a></p>
                                            <p class="title6">{{ \Illuminate\Support\Str::limit(\Illuminate\Support\Str::of($data->content)->stripTags(), 100) }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <a title="Previous" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="color: #212529">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: #212529">Previous</span>
            </a>
            <a title="Next" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="color: #212529">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: #212529">Next</span>
            </a>
        </div>
    </div>
@endsection

@push('page_script')
    <script src="{{ asset('assets/js/user/index.js') }}"></script>
@endPush
