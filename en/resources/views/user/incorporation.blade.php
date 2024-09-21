@extends('user.basic.wrapper')

@push('meta')
    <title>Incorporation | Startup Portal Taiwan</title>
    <meta name="description" content="Introducing 3 types of entities and general business registration process in Taiwan.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Incorporation | Startup Portal Taiwan">
    <meta property="og:description" content="Introducing 3 types of entities and general business registration process in Taiwan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.incorporation') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_incorporation.jpg') }}">
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
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_incorporation.jpg') }}');opacity:1;"></div>
        <h1 class="banner-text">
            Incorporation
        </h1>
    </section>
    <section class="entity">
        <h2 class="subtitle"><span class="tag">3</span>Types of Entities</h2>
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="{{ asset('assets/img/bg_be_type1.jpg') }}" alt="bg_BE_Type1">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#1 Company or corporation, Company Limited by Shares or Limited Liability Company</span>
                        </h3>
                        <p class="true">
                            Most International entrepreneurs or companies entering the Taiwan market will set up a Limited Liability Company. If you paid in capital will be great or if you are taking in outside investors, you might choose Company Limited by Shares.
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="reason right">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="{{ asset('assets/img/bg_be_type2.jpg') }}" alt="bg_BE_Type2">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#2 Branch office</span>
                        </h3>
                        <p class="true">
                            Branch offices are also profit-seeking. Entities registered as companies under foreign laws should first apply for recognition as a foreign company and the establishment of the branch office with the Central Region Office, MOEA
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="reason left">
            <div class="reason-inner">
                <div class="image">
                    <div class="image-inner">
                        <img src="{{ asset('assets/img/bg_be_type3.jpg') }}" alt="bg_BE_Type3">
                    </div>
                </div>
                <div class="text">
                    <div class="text-inner">
                        <h3>
                            <span class="tag">#3 Representative office</span>
                        </h3>
                        <p class="true">
                            When foreign companies are unwilling to establish a company or branch in Taiwan and are interested in appointing someone to represent the company in a legal capacity, the company may report the said representative to the Central Region Office, MOEA.
                        </p>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </section>
    <section class="registration">
        <h2 class="subtitle">General Business Registration Process</h2>
        <div class="regis-process">
            <div class="process">STEP 1. Check the Company/ Business Enterprise Name</div>
            <div class="process-text">Apply for reservation of company name and business scope (Enterprise: Central Region Office, MOEA / Business firms: Local city or county government).
                <font style="font-weight:bold"><a title="online application" target="_blank" href="https://onestop.nat.gov.tw/oss/web/Show/engWorkFlowEn.do">Click Here</a> for online application</font>
            </div>
            <div class="process">STEP 2. Permission for Investment</div>
            <div class="process-text">Apply for Foreign Investment Approval (Please prepare the following documents to the MOEAIC: Investment Permission with Application Form A, Investor Certification, Power of Attorney etc.).<br><br>
                <font style="font-weight:bold">MOEAIC Contact Information :<br>Address : </font>
                8F, No. 7, Sec. 1, Jhongjheng District, Roosevelt Rd., Taipei City, Taiwan (R.O.C.)<br>
                <font style="font-weight:bold">Tel : </font>886-2-3343-5700
            </div>
            <div class="process">STEP 3. Approval of Investment Amount</div>
            <div class="process-text">Capital verification and Approval(Please prepare the following documents to the MOEAIC: Capital Approval with Advice of Inward Remittance, Foreign Exchange Memo, A Photocopy of the Company Deposit Passbook etc.).<br><br>
                <font style="font-weight:bold">MOEAIC Contact Information :<br>Address : </font>
                8F, No. 7, Sec. 1, Jhongjheng District, Roosevelt Rd., Taipei City, Taiwan (R.O.C.)<br>
                <font style="font-weight:bold">Tel : </font>886-2-3343-5700
            </div>
            <div class="process">STEP 4. Company/ Business Enterprise Registration</div>
            <div class="process-text">
                <font style="font-weight:bold">1. Company registration</font><br>
                (1) Paid-in capital of at least NT500 million: The Department of Commerce, MOEA.<br>
                (2) Paid-in capital of under NT500 million: Central Region Office, MOEA or Taipei City Government or Kaohsiung City Government or New Taipei City Government or Taichung City Government or Tainan City Government or Taoyuan City Government).<br>
                <font style="font-weight:bold">2. Business Enterprise registration</font><br>
                An investor setting up a business enterprise must apply for registration with the local county or city government. Parties applying for business registration should apply with their local country or city government ofﬁce.<br><br>
                <font style="font-weight:bold"><a title="online application" target="_blank" href="https://onestop.nat.gov.tw/oss/web/Show/engWorkFlowEn.do">Click Here</a> for online application</font>
            </div>
            <div class="process">STEP 5. Apply for Related Registration</div>
            <div class="process-text">Regarding Taxation Registration、Export/Import Business Registration, Factory Registration, and Application for Businesses Requiring Special Permission,
                <font style="font-weight:bold">please refers to <a title="Invest Taiwan" target="_blank" href="https://investtaiwan.nat.gov.tw/showPagengInvestmentStatus02?lang=eng&search=InvestmentStatus02">Invest Taiwan Website</a>.</font>
            </div>
        </div>
    </section>
@endsection

@push('page_script')

@endPush
