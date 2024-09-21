@extends('user.basic.wrapper')

@push('meta')
    <title>Incubator & Accelerator | Startup Portal Taiwan</title>
    <meta name="description" content="To help startups and entrepreneurs find appropriate organizations and resources efficiently, the SMESA has sorted a list of accelerators or incubators in Taiwan that recognized by the competent authority.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Incubator & Accelerator | Startup Portal Taiwan">
    <meta property="og:description" content="To help startups and entrepreneurs find appropriate organizations and resources efficiently, the SMESA has sorted a list of accelerators or incubators in Taiwan that recognized by the competent authority.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.ia') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_ia.jpg') }}">
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
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_ia.jpg') }}');opacity:1;"></div>
        <h1 class="banner-text">
            Incubator & Accelerator
        </h1>
    </section>
    <section class="container mb-5">
        <div class="row mt-4">
            <div class="col-lg-12 intro-text">For startups and entrepreneurs, especially on their early stage, incubators and accelerators can offer great ways to grow their businesses quickly. With their help and guidance, startup teams and entrepreneurs may refine their idea, build out their business plan, work on product-market fit, attract venture capital investment, and network in the startup ecosystem.</div>
            <div class="col-lg-12 intro-text mt-3 mb-3">To help startups and entrepreneurs find appropriate organizations and resources efficiently, the SMESA has sorted a list of accelerators or incubators in Taiwan that recognized by the competent authority.</div>
            <div class="col-lg-12">
                <div class="mb-2"><b>For More Information</b></div>
                <div class="mb-2"><b>Website: </b>
                    <a title="moeasmea" target="_blank" href="https://incubator.sme.gov.tw/en/">https://incubator.sme.gov.tw/en/</a></div>
            </div>
        </div>
    </section>

    <h2 class="subtitle">More incubator and accelerator in Taiwan</h2>
    <section class="container mb-5">
        <div class="row mt-4">
            <ul style="list-style: none; margin:0 auto;">
                <li>Taiwan Startup Stadium : <a target="_blank" href="//www.startupstadium.tw/">www.startupstadium.tw</a></li>
                <li>Taiwan Startup Terrace (Linkou): <a target="_blank" href="//www.startupterrace.tw/">www.startupterrace.tw</a></li>
                <li>Taiwan Startup Terrace (Kaohsiung): <a target="_blank" href="////www.yawan-startup.tw/en/">www.yawan-startup.tw</a></li>
                <li>Taiwan Tech Arena : <a target="_blank" href="//www.taiwanarena.tech/">www.taiwanarena.tech</a></li>
                <li>Anchor Taiwan : <a target="_blank" href="//www.anchortaiwan.com/">www.anchortaiwan.com</a></li>
                <li>AppWorks : <a target="_blank" href="//appworks.tw/">appworks.tw</a></li>
                <li>BE Accelerator : <a target="_blank" href="//www.beaccelerator.com/">www.beaccelerator.com</a></li>
                <li>SparkLabs Taipei : <a target="_blank" href="//www.sparklabstaipei.com/">www.sparklabstaipei.com</a></li>
                <li>StarFab Accelerator : <a target="_blank" href="//www.starfabx.com/">www.starfabx.com</a></li>
                <li>Garage+ : <a target="_blank" href="//www.garageplus.asia/en/">www.garageplus.asia</a></li>
                <li>TAcc+ : <a target="_blank" href="https://taccplus.com/en/home-2/">taccplus.com/en/</a></li>
                <li>CrossBond : <a target="_blank" href="https://crossbond.tw/en/home/">crossbond.tw/en/</a></li>
            </ul>
        </div>
    </section>
@endsection

@push('page_script')

@endPush
