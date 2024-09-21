@extends('user.basic.wrapper')

@push('meta')
    <title>Six Municipalities of Taiwan | Startup Portal Taiwan</title>
    <meta name="description" content="There are 6 municipality government to help entrepreneurs in different stage.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Six Municipalities of Taiwan | Startup Portal Taiwan">
    <meta property="og:description" content="There are 6 municipality government to help entrepreneurs in different stage.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.smt') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_smt.jpg') }}">
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
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_smt.jpg') }}');opacity:1;"></div>
        <h1 class="banner-text">
            Six Municipalities of Taiwan
        </h1>
    </section>
    <section>
        <div class="container" style="padding-bottom: 10px; padding-top:10px">
            <div class="col-lg-12 intro-text mb-2 text-center">
                <br>
                If you have more question, there are 6 municipality<br>
                government to help entrepreneurs in different stage.
                <br>
                <br>
            </div>
        </div>
    </section>
    <section style="background-color: rgba(61,186,250,.1);">
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">Taipei City Government Department of Economic Development</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://english.doed.gov.taipei/" href="https://english.doed.gov.taipei/">https://english.doed.gov.taipei/</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-2-2720-8889<br>
                <span class="mr-2"><b>Email: </b></span><a title="teso@mail.taipei.gov.tw" href="mailto:teso@mail.taipei.gov.tw">teso@mail.taipei.gov.tw</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">New Taipei City Government Economic Development Department</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://www.economic.ntpc.gov.tw/Custom/New%20Taipei%20City%20OPEN%20FOR%20BUSINESS" href="https://www.economic.ntpc.gov.tw/Custom/New%20Taipei%20City%20OPEN%20FOR%20BUSINESS">https://www.economic.ntpc.gov.tw/Custom/New%20Taipei%20City%20OPEN%20FOR%20BUSINESS</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-2-2960-3456 ext.5293<br> Mrs, Kao of the Company Registration division
            </div>
        </div>
    </section>
    <section style="background-color: rgba(250,186,144,.2);">
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">Taoyuan City Government Department of Economic Development</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://edb.tycg.gov.tw/en/" href="https://edb.tycg.gov.tw/en/">https://edb.tycg.gov.tw/en/</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-3-3322101 ext.5260、5261、5262
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">Taichung City Government Economic Development Bureau</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://www.invest-taichung.com.tw/en/" href="https://www.invest-taichung.com.tw/en/">https://www.invest-taichung.com.tw/en/</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-4-2228-9111 ext.31136、31115、31120
            </div>
        </div>
    </section>
    <section style="background-color: rgba(250,250,15,.2);">
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">Tainan City Government Economic Development Bureau</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://www.tainan.gov.tw/en/" href="https://www.tainan.gov.tw/en/">https://www.tainan.gov.tw/en/</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-6-299-1111
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding-bottom: 10px; padding-top:10px;">
            <h2 class="subtitle mini">Kaohsiung City Government Economic Development Bureau</h2>
            <div class="mt-4 mb-4 text-center" style="letter-spacing: 1px;">
                <a target="_blank" title="https://edbkcg.kcg.gov.tw/en/Default.aspx" href="https://edbkcg.kcg.gov.tw/en/Default.aspx">https://edbkcg.kcg.gov.tw/en/Default.aspx</a><br>
                <span class="mr-2"><b>Contact: </b></span>+886-7-336-8333
            </div>
        </div>
    </section>
@endsection

@push('page_script')

@endPush
