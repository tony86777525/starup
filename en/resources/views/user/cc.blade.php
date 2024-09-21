@extends('user.basic.wrapper')

@push('meta')
    <title>Chamber & Community | Startup Portal Taiwan</title>
    <meta name="description" content="We gather European Chamber of Commerce Taiwan (ECCT), The American Chamber of Commerce in Taiwan(AmCham) and some of the other well known chambers website. Founder Squad, online community and the Red Room for entrepreneurs in Taiwan meet like-minded people.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Chamber & Community | Startup Portal Taiwan">
    <meta property="og:description" content="We gather European Chamber of Commerce Taiwan (ECCT), The American Chamber of Commerce in Taiwan(AmCham) and some of the other well known chambers website. Founder Squad, online community and the Red Room for entrepreneurs in Taiwan meet like-minded people.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.cc') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_cc.jpg') }}">
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
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_cc.jpg') }}');opacity:1;"></div>
        <h1 class="SIbanner-text">
            Chamber & Community
        </h1>
    </section>
    <h2 class="subtitle">Chamber</h2>
    <section class="container">
        <div class="row mt-4">
            <div class="col-lg-12 intro-text mb-2">The European Chamber of Commerce (ECCT) and the American Chamber Commerce Taipei (AmCham) are the two leading foreign business organizations for communication with the Taiwan government.</div>
            <div class="col-lg-12">
                <div class="mb-2"><b>European Chamber of Commerce Taiwan(ECCT)</b></div>
                <div class="mb-2"><b><a title="www.ecct.com.tw" href="https://www.ecct.com.tw/" target="_blank">www.ecct.com.tw</a></b></div>
                <div class="mb-2"><b>The American Chamber of Commerce in Taiwan (AmCham)</b></div>
                <div class="mb-2"><b><a title="https://amcham.com.tw/" href="https://amcham.com.tw/" target="_blank">amcham.com.tw</a></b></div>
            </div>
            <div class="col-lg-12 intro-text mt-3 mb-2">Some of the other well known chambers are:</div>
            <div class="col-lg-12">
                <div class="mb-2"><b>American Chamber of Commerce Taichung</b></div>
                <div class="mb-2"><b><a title="taichungamcham" href="http://www.taichungamcham.com/" target="_blank">www.taichungamcham.com</a></b></div>
                <div class="mb-2"><b>British Chamber of Commerce in Taipei</b></div>
                <div class="mb-2"><b><a title="bcctaipei" href="http://www.bcctaipei.com/" target="_blank">www.bcctaipei.com</a></b></div>
                <div class="mb-2"><b>The Australian and New Zealand Chamber of Commerce in Taiwan</b></div>
                <div class="mb-2"><b><a title="anzcham" href="http://www.anzcham.org.tw/" target="_blank">www.anzcham.org.tw</a></b></div>
                <div class="mb-2"><b>Japan-Taiwan Exchange Association</b></div>
                <div class="mb-2"><b><a title="koryu" href="https://www.koryu.or.jp/" target="_blank">www.koryu.or.jp</a></b></div>
                <div class="mb-2"><b>Canadian Chamber of Commerce in Taiwan</b></div>
                <div class="mb-2"><b><a title="canchamtw" href="https://canchamtw.com/" target="_blank">canchamtw.com</a></b></div>
                <div class="mb-2"><b>Swedish Chamber of Commerce Taipei</b></div>
                <div class="mb-2"><b><a title="swedchamtw.org" href="http://swedchamtw.org/" target="_blank">swedchamtw.org</a></b></div>
            </div>
        </div>
    </section>

    <h2 class="subtitle">Community</h2>
    <section class="container">
        <div class="row mt-4">
            <div class="col-lg-12 intro-text mb-2">There are several websites, online communities and Facebook groups where you can get more information about entrepreneurship in Taiwan and meet like-minded people.</div>
            <div class="col-lg-12 intro-text mt-3 mb-2">Forumosa is the oldest online community for foreigners in Taiwan.</div>
            <div class="col-lg-12">
                <div class="mb-2"><b><a title="www.forumosa.com" href="http://www.forumosa.com" target="_blank">www.forumosa.com</a></b></div>
                <div class="intro-text mt-3 mb-2">Start a Business in Taiwan is a website and International entrepreneur community organized by Elias Ek, the author of the book How to Start a Business in Taiwan and his company Enspyre. Since 2005 they periodically organize events for entrepreneurs.</div>
                <div class="mb-2"><b><a title="startabusinessintaiwan.tw" href="http://www.startabusinessintaiwan.tw" target="_blank">startabusinessintaiwan.tw</a></b></div>
                <div class="intro-text mt-3 mb-2">CrossBond is an incubator for entrepreneurs from ASEAN countries and India who are interesting in start their business in Taiwan. And Taiwanese entrepreneurial teams who intend to pursue the ASEAN-Indian market. We provide one-stop solution for resources and mentoring.</div>
                <div class="mb-2"><b><a title="https://crossbond.tw/en/home/" href="https://crossbond.tw/en/home/" target="_blank">crossbond.tw/en/home/</a></b></div>
                <div class="intro-text mt-3 mb-2">Talent sustainability is an important issue for all companies, especially in Taiwan where there are more than 70,000 international talents from ASEAN India. CBTalent program that aim to build the biggest ASEAN & India community in Taiwan. Assist in international talent matchmaking and professional visa consulting services.</div>
                <div class="mb-2"><b><a title="https://talent.crossbond.tw" href="https://talent.crossbond.tw" target="_blank">talent.crossbond.tw</a></b></div>
                <div class="intro-text mt-3 mb-2">Another important part of the foreign community is the Foreign Community Center. They concentrate on the well-being of people and families and provide a lot of fantastic services like counselling and coaching.The Red Room is an English-language non-profit community for positive and creative people like performers and entrepreneurs.</div>
                <div class="mb-2"><b><a title="communitycenter.org.tw" href="http://www.communitycenter.org.tw/" target="_blank">communitycenter.org.tw</a></b></div>
            </div>
        </div>
    </section>
    <h2 class="subtitle">Cultural</h2>
    <section class="container mb-5">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="mb-2"><b>The Red Room</b></div>
                <div class="mb-2"><b><a title="redroomtaipei.com" href="http://redroomtaipei.com/" target="_blank">redroomtaipei.com</a></b></div>
            </div>
            <div class="col-lg-12 intro-text mb-2">Red Room is organized by a fantastic team of volunteers that attract a crowd of 100-150 to listen to and appreciate anyone with something to share. Attend, listen, participate and charge up your creative powers!</div>
            <img alt="redroom" src="{{ asset('assets/img/redroom.jpg') }}" width="100%">
        </div>
    </section>
@endsection

@push('page_script')

@endPush
