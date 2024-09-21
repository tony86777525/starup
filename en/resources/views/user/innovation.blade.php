@extends('user.basic.wrapper')

@push('meta')
    <title>Taiwan Social Innovation Entrepreneurship | Startup Portal Taiwan</title>
    <meta name="Description" content="Social innovation refers to using innovative methods, such as using technology and cross-disciplinary cooperation to find effective solutions to social and environmental problems. We hope that social innovation could prosper economy, society, environment, indigenous culture in Taiwan, while adherering to UN’s sustainable development goals.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Taiwan Social Innovation Entrepreneurship | Startup Portal Taiwan">
    <meta property="og:description" content="Social innovation refers to using innovative methods, such as using technology and cross-disciplinary cooperation to find effective solutions to social and environmental problems. We hope that social innovation could prosper economy, society, environment, indigenous culture in Taiwan, while adherering to UN’s sustainable development goals.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.innovation') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_innovation.png') }}">
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/index.css') }}" />
@endPush

@section('main')
    <div class="sharethis-inline-share-buttons" style="z-index: 2;position: fixed;right: 65px;bottom: 42px;"></div>

    <section class="banner-section">
        <div class="banner-overlay" style="width: 100%;height: 100%;position: absolute;z-index: 1;">
            <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.3);width: 100%;height: 100%;"></div>
        </div>
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_innovation.png') }}');opacity:1;"></div>
        <h1 class="SIbanner-text">
            Taiwan Social Innovation Entrepreneurship
        </h1>
    </section>
    <h2 class="mb-4 subtitle" style="background-color: rgba(250,186,144,.2);padding-bottom:30px!important">What is Social Innovation?</h2>
    <section class="container">
        <div class="row mt-3">
            <div class="col-sm-12 col-lg-6 intro-text">
                Social innovation refers to using innovative methods, such as using technology and cross-disciplinary cooperation to find effective solutions to social and environmental problems. We hope that social innovation could prosper economy, society, environment, indigenous culture in Taiwan, while adherering to UN’s sustainable development goals.</div>
            <div class="col-sm-12 col-lg-6">
                <iframe title="Social x Innovation x Impact (2018-5)" src="https://www.youtube.com/embed/CDDYiIYEezc?autoplay=1&amp;amp;feature=oembed" frameborder="0" width="100%" height="300px"></iframe>
            </div>
        </div>
    </section>
    <h2 class="mt-4 mb-4 subtitle" style="background-color: rgba(250,250,15,.2);padding-bottom:30px!important">Social Innovation in Taiwan</h2>
    <section class="container">
        <div class="row mt-4">
            <div class="col-lg-12 intro-text">In Taiwan, social innovation has gradually budded under the influence of the global trend with diverse forms, including non-profit organizations, cooperatives, and companies. According to a survey in 2017, social innovation enterprises in Taiwan consist mostly of new micro-enterprises, which are established within the last three years and have a capital less than $160,000. Their operation objectives focus on food and agricultural innovation, environmental sustainability/protection, and social care.
            </div>
            <div class="intro-block"><div class="intro-img"><img alt="Taipei" src="{{ asset('assets/img/intro-img01.jpg') }}"></div><div class="intro-title">Taipei</div><div class="intro-detail">Social Innovation Lab</div></div>
            <div class="intro-block"><div class="intro-img"><img alt="Taoyuan" src="{{ asset('assets/img/intro-img02.jpeg') }}"></div><div class="intro-title">Taoyuan</div><div class="intro-detail">Social Business Center</div></div>
            <div class="intro-block"><div class="intro-img"><img alt="Taichung" src="{{ asset('assets/img/intro-img03.jpg') }}"></div><div class="intro-title">Taichung</div><div class="intro-detail">Social Innovation Unit</div></div>
        </div>
    </section>
    <h2 class="mt-4 mb-4 subtitle" style="background-color: rgba(61,186,250,.2);padding-bottom:30px!important">Our Goals</h2>
    <section class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6 intro-text">
                To create a supportive environment, Taiwanese government has launched three action plans.
                <ul style="font-weight:bold">
                    <li>Social Enterprise Action Plan (2014)</li>
                    <li>Social Innovation Action Plan 1.0 (2018-2022)</li>
                    <li>Social Innovation Action Plan 2.0 (2023-2026)</li>
                </ul>
                The main goal of these acts is to establish a socially innovative and integrated ecological environment, explore more social innovation models, and follow the lead of UN’s sustainable development goals.
            </div>
            <div class="col-sm-12 col-lg-6" style="text-align: center">
                <img alt="Goals" src="{{ asset('assets/img/s3_bottom-540.png') }}" style="width: inherit;max-width: 500px;max-height: 500px">
            </div>
        </div>
    </section>
    <h2 class="mt-4 mb-4 subtitle" style="background-color: rgba(61,186,144,.2);padding-bottom:30px!important">What we achieved</h2>
    <section class="container">
        <div class="row achieve">
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Awareness</h3>
                <p class="intro-text">We organize various competitions to source and support new solutions to societal challenges, and thereby raise awareness about social innovation. One such example is the first “Presidential Hackathon” that encourages the Taiwanese government to put innovation in practice and address the need for social innovation.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Funding</h3>
                <p class="intro-text">We offer subsidy, investment, and financing tools to support social innovation, and link CSR resources to cooperate with social enterprises in marketing, procurement, etc.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Incubation</h3>
                <p class="intro-text">We established the Social Innovation Lab on 18 October, 2017, as an incubator and accelerator that provides resources for social innovation organizations.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Regulation</h3>
                <p class="intro-text">We improve the conditions for social innovation and social enterprises in Taiwan through the Startup Regulation Harmonization Platform and Deregulation Platform.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Promotion</h3>
                <p class="intro-text">We strengthen the cooperation between the private sector and government. The goal is to initiate, introduce, and disseminate government policy to foster and encourage social innovation in the private sector.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h3 class="achieve-subtitle">Networking</h3>
                <p class="intro-text">We collaborated with private sectors to hold “2018 Asia Social Enterprise Summit” on May 5th and 6th. Next year, we will continue to run this event to promote conversations, exchange, and cooperation with international partners.</p>
            </div>
        </div>
        <div class="row">
            <div class="mt-3 col-lg-3 col-md-6 col-sm-12">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/s6_1-535.png') }}" alt="bake">
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-12">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/s6_2-535.png')  }}" alt="meeting">
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-12">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/s6_3-535.png') }}" alt="farm">
            </div>
            <div class="mt-3 col-lg-3 col-md-6 col-sm-12">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/s6_4-535.png') }}" alt="Tomorrow ASIA">
            </div>
        </div>
        <div class="mt-5" style="text-align: center"><img alt="skyline" src="{{ asset('assets/img/skyline-320.png') }}"></div>
    </section>
@endsection

@push('page_script')

@endPush
