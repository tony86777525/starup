@extends('user.basic.wrapper')

@push('meta')
    <title>Government Incentive | Startup Portal Taiwan</title>
    <meta name="description" content="Taiwan government provides different kinds of government incentive; find the suitable project for your company. Awards: Taiwan Government Award, Grant and Loan-Taiwan SMEs Innovation Award, Business Startup Award. Loan: SME Innovation Development Project Loan, Small Enterprise Loan. Research & project: Small Business Innovation Research (SBIR), Service Industry Innovation Research (SIIR), National Development Fund Business Angel Investment Program, Taipei City Industry Incentive Subsidy Project, Young Entrepreneur Financing Loan.">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Government Incentive | Startup Portal Taiwan">
    <meta property="og:description" content="Taiwan government provides different kinds of government incentive; find the suitable project for your company. Awards: Taiwan Government Award, Grant and Loan-Taiwan SMEs Innovation Award, Business Startup Award. Loan: SME Innovation Development Project Loan, Small Enterprise Loan. Research & project: Small Business Innovation Research (SBIR), Service Industry Innovation Research (SIIR), National Development Fund Business Angel Investment Program, Taipei City Industry Incentive Subsidy Project, Young Entrepreneur Financing Loan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.incentive') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_incentive.jpg') }}">
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
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_incentive.jpg') }}');opacity:1;"></div>
        <h1 class="banner-text">
            Government<br>Incentive
        </h1>
    </section>
    <h2 class="subtitle">Taiwan Government Award, Grant and Loan</h2>
    <section class="container">
        <div class="row mt-4">
            <div class="col-lg-12 intro-text">To encourage SMEs or startups to start and run their business, Taiwan Government, at both national and local levels, are providing various supporting awards, grants and loans</div>
            <div class="support-block col-lg-4">
                <div class="support-img"><img alt="award" src="{{ asset('assets/img/icon_award.png')  }}"></div>
                <div class="support-title">Award</div>
                <div style="clear:both"></div>
                <div class="support-detail">
                    <ul>
                        <li><a title="Taiwan SMEs Innovation Award" href="#sme">Taiwan SMEs Innovation Award</a></li>
                        <li><a title="Business Startup Award" href="#bsa">Business Startup Award</a></li>
                    </ul>
                </div>
            </div>
            <div class="support-block col-lg-4">
                <div class="support-img"><img alt="loan" src="{{ asset('assets/img/icon_loan.png') }}"></div>
                <div class="support-title">Loan</div>
                <div style="clear:both"></div>
                <div class="support-detail">
                    <ul>
                        <li><a title="SME Innovation Development Project Loan" href="#smePl">SME Innovation Development Project Loan</a></li>
                        <li><a title="Small Enterprise Loan" href="#sel">Small Enterprise Loan</a></li>
                        <li><a title="Young Entrepreneur Financing Loan" href="#yefl">Young Entrepreneur Financing Loan</a></li>
                        <li><a title="The Bilingual Branches of the Domestic Banks" href="https://contacttaiwan.tw/Upload/download/a70b12a6-eea2-4cf4-9c32-7be47c2b27e8.pdf">The Bilingual Branches of the Domestic Banks</a></li>

                    </ul>
                </div>
            </div>
            <div class="support-block col-lg-4">
                <div class="support-img"><img alt="grant" src="{{ asset('assets/img/icon_grant.png') }}"></div>
                <div class="support-title">Grant</div>
                <div style="clear:both"></div>
                <div class="support-detail">
                    <ul>
                        <li><a title="Small Business Innovation Research" href="#sbir">Small Business Innovation Research (SBIR)</a></li>
                        <li><a title="Service Industry Innovation Research" href="#siir">Service Industry Innovation Research (SIIR)</a></li>
                        <li><a title="National Development Fund Business Angel Investment Program" href="#ndf">National Development Fund Business Angel Investment Program</a></li>
                        <li><a title="Taipei City Industry Incentive Subsidy Project" href="#tci">Taipei City Industry Incentive Subsidy Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="sme" style="background-color: rgba(61,186,250,.1);">
        <section class="container" style="padding-bottom: 30px">
            <h2 class="subtitle">Taiwan SMEs Innovation Award</h2>
            <div class="intro-text">The purpose of Taiwan SMEs Innovation Award(中小企業創新研究獎) is to politically create a climate promoting innovative R&D, so as to inspire the prosperity of SMEs. The award has been granted to over 960 SMEs that exhibited excellent performances in innovation and research development. Thirty innovative subjects will be chosen for this honor.</div>
            <div class="mt-4" style="letter-spacing: 1px;">
                <div class="mt-2"></div>
                <b class="mr-2">For More Information<br>Website: </b><br>
                <a title="moeasmea" target="_blank" href="https://www.sme.gov.tw/article-en-2612-4471">https://www.sme.gov.tw/article-en-2612-4471</a><br>
                <a title="moeasmea_2" target="_blank" href="https://www.sme.gov.tw/tsia/masterpage-tsia">https://www.sme.gov.tw/tsia/masterpage-tsia</a><br>
                <b class="mr-2">Facebook: </b><a title="Taiwan SMEs Innovation Award" target="_blank" href="https://www.facebook.com/%E4%B8%AD%E5%B0%8F%E4%BC%81%E6%A5%AD%E5%89%B5%E6%96%B0%E7%A0%94%E7%A9%B6%E7%8D%8E-Taiwan-SMEs-Innovation-Award-111216955581766/">中小企業創新研究獎 Taiwan SMEs Innovation Award</a><br>
                <b class="mr-2">E-mail:</b><a title="jimmy_hsu@nasme.org.tw" href="mailto:jimmy_hsu@nasme.org.tw">jimmy_hsu@nasme.org.tw</a><br>
                <b class="mr-2">Contact: </b>886-2-2366-0812
            </div>
        </section>
    </div>
    <section class="container">
        <h2 id="bsa" class="subtitle">Business Startup Award</h2>
        <div class="intro-text">Business Startup Award(新創事業獎) aims at encouraging startups and enterprises to develop innovative product, technology, process or service and create premium business model. The enterprise should be established within less than 8 years and recognized by the competent authority</div>
        <div class="mt-4 mb-4" style="letter-spacing: 1px;">
            <b class="mr-2">Prizes: </b>Prepare the winner’s collection and hold a public award ceremony to issue a trophy and a certificate.<br>
            <div class="mt-2"></div>
            <b class="mr-2">For More Information<br>Website: </b><br>
            <a title="award" target="_blank" href="https://startup.sme.gov.tw/startupaward/index_eng.php">https://startup.sme.gov.tw/startupaward/index_eng.php</a><br>
            <a title="moeasmea" target="_blank" href="https://www.sme.gov.tw/article-en-2612-4472">https://www.sme.gov.tw/article-en-2612-4472</a><br>
            <b class="mr-2">Facebook: </b><a title="BusinessStartupAward" target="_blank" href="https://www.facebook.com/BusinessStartupAward/">新創事業獎 Business Startup Award</a><br>
            <b class="mr-2">Email: </b><a title="award" href="mailto:tina_bai@nasme.org.tw">tina_bai@nasme.org.tw</a><br>
            <b class="mr-2">Contact: </b>+886-2-2366-0812 ext. 326
        </div>
    </section>
    <section class="bgSkin">
        <div class="container" style="text-align: center">
            <h2 id="sbir" class="subtitle">Small Business Innovation Research (SBIR)</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6 SBIRtypes"><div class="mb-3"><img alt="SBIR01" src="{{ asset('assets/img/icon01_sbir.png') }}" style="height:90px"></div>Developing a brand new idea, concept or new technology</div>
                <div class="col-lg-3 col-sm-6 SBIRtypes"><div class="mb-3"><img alt="SBIR02" src="{{ asset('assets/img/icon02_sbir.png') }}" style="height:90px"></div>Applying an existing technology to a new application</div>
                <div class="col-lg-3 col-sm-6 SBIRtypes"><div class="mb-3"><img alt="SBIR03" src="{{ asset('assets/img/icon03_sbir.png') }}" style="height:90px"></div>Applying a new technology or business model to an existing application</div>
                <div class="col-lg-3 col-sm-6 SBIRtypes"><div class="mb-3"><img alt="SBIR04" src="{{ asset('assets/img/icon04_sbir.png') }}" style="height:90px"></div>Improving an existing technology or product</div>
            </div>
        </div>
        <div class="SBIRtable-section">
            <div class="center-block">
                <div class="SBIR-block SBIR-block-phase1">
                    <div class="type-phase1">
                        <div class="name-area">
                            <div class="name">Pilot Study /<br>Preliminary Planning</div>
                            <div class="subname">Phase 1</div>
                        </div>
                        <div class="SBIR-area">
                            <div class="number">NT $1,000,000</div>
                        </div>
                        <div class="SBIR-control">
                            <div class="toggle"><span class="active">6 months</span></div>
                        </div>
                    </div>
                    <div class="type-info">
                        <ul>
                            <li>A small-scale experiment or statistical analysis of the creative concept that can potentially benefit industries so as to validate that concept as being viable.</li>
                            <li>Applicants must describe the key problems addressed, the creative concept they intend to use, anticipated benefits to industries, as well as relative R&D track records and implementation plans.</li>
                        </ul>
                    </div>
                </div>
                <div class="SBIR-block SBIR-block-phase2">
                    <div class="type-phase2">
                        <div class="name-area">
                            <div class="name">R&D / Detailed Planning</div>
                            <div class="subname">Phase 2</div>
                        </div>
                        <div class="SBIR-area">
                            <div class="number">NT $10,000,000</div>
                        </div>
                        <div class="SBIR-control">
                            <div class="toggle"><span class="active">2 years</span></div>
                        </div>
                    </div>
                    <div class="type-info">
                        <ul>
                            <li>This involves the implementation and wide application of R&D results in Phase II so as to meet market and customer demand.</li>
                            <li>The focus of R&D extends from the emphasis on the design of technical innovations to the production of the technical application.</li>
                            <li>They may include engineering techniques, moulding development techniques, product design, trial production and ramp-up techniques, or primary market surveys.</li>
                            <li>Applicants must describe the application of the developed technique, feasible implementation, commercialization target and expected benefits.</li>
                        </ul>
                    </div>
                </div>
                <div class="SBIR-block SBIR-block-phase3">
                    <div class="type-phase3">
                        <div class="name-area">
                            <div class="name">Value-Added Applications</div>
                            <div class="subname">Phase 2+</div>
                        </div>
                        <div class="SBIR-area">
                            <div class="number">NT $5,000,000</div>
                        </div>
                        <div class="SBIR-control">
                            <div class="toggle"><span class="active">1 year</span></div>
                        </div>
                    </div>
                    <div class="type-info">
                        <ul>
                            <li>R&D of a product, production method or service mechanism based on a tangible and feasible creative concept expected to benefit industries.</li>
                            <li>The R&D of a production method can extend to the trial production or ramp-up stage.</li>
                            <li>Applicants must describe the key problems addressed, the creative concept they intend to use, anticipated benefits to industries, as well as relative R&D track records and implementation plans.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-4" style="letter-spacing: 1px;">
                <b class="mr-2">For More Information</b><br>
                <b class="mr-2">E-mail:</b><a title="award" href="mailto:sbir1@admail.csd.org.tw">sbir1@admail.csd.org.tw</a><br>
                <b class="mr-2">Contact: </b>0800-888-968<br>
                <b>Website: </b><a title="Small Business Innovation Research" target="_blank" href="https://www.sbir.org.tw/project/introSBIRen">https://www.sbir.org.tw/project/introSBIRen</a>
            </div>
        </div>
    </section>
    <section class="container">
        <h2 id="siir" class="subtitle">Service Industry Innovation Research (SIIR)</h2>
        <div class="intro-text">Service Industry Innovation Research (服務業創新研發計畫) – Research grant for companies legally registered in Taiwan, not including branch offices, with positive equity in the retail, logistics, restaurants, advertising, e-commerce industries.</div>
        <div class="mt-4 mb-4" style="letter-spacing: 1px;">
            <b class="mr-2">Grant amount: </b>
            <br>Applications filed by individual businesses Up to NT$3 million
            <br>Applications filed by alliances Up to NT$10 million
            <div class="mt-2"></div>
            <b class="mr-2">For More Information<br>Website: </b>
            <a title="Service Industry Innovation Research"  target="_blank" href="http://gcis.nat.gov.tw/neo-s/Web/default.aspx">http://gcis.nat.gov.tw/neo-s/Web/default.aspx</a><br>
            <b class="mr-2">Email: </b>
            <a title="02407@cpc.org.tw" href="mailto:02407@cpc.org.tw">02407@cpc.org.tw</a>、
            <a title="02968@cpc.org.tw" href="mailto:02968@cpc.org.tw">02968@cpc.org.tw</a><br>
            <b class="mr-2">Contact: </b>886-2-2701-1769 ext.231～244
        </div>
    </section>

    <section style="background-color: rgba(61,186,144,.2);">
        <section class="container">
            <h2 id="ndf" class="subtitle">National Development Fund Business Angel Investment Program</h2>
            <div class="intro-text">National Development Fund Business Angel Investment Program (行政院國家發展基金 創業天使投資方案) is to support entrepreneurs with innovative capacities and global potential could grow rapidly.</div>
            <div class="mt-4 pb-4" style="letter-spacing: 1px;">
                <b class="mr-2">Investment amount: </b>Up to NT$20 million
                <div class="mt-2"></div>
                <b class="mr-2">For More Information<br>Website: </b>
                <a title="National Development Fund Business Angel Investment Program" target="_blank" href="https://www.angelinvestment.org.tw/">https://www.angelinvestment.org.tw</a><br>
                <b class="mr-2">Email: </b><a title="award" href="mailto:angelinvestment@tvca.org.tw">angelinvestment@tvca.org.tw</a><br>
                <b class="mr-2">Contact: </b>886-2-2546-5336
            </div>
        </section>
    </section>
    <section style="background-color:#f9e4a57d;;">
        <section class="container">
            <h2 id="tci" class="subtitle">Taipei City Industry Incentive Subsidy Project</h2>
            <div class="intro-text">Taipei City Industry Incentive Subsidy Project(臺北市產業發展獎勵補助計畫) has been launched by Taipei City Government. In order to encourage technology development, Taipei City is the first city government that provides R&D, brands establishment incubation, new startups, and competitive industries to develop key industries.<br>Companies registered in Taipei or SMEs are eligible to apply.</div>
            <div class="mt-4 pb-4" style="letter-spacing: 1px;">
                <b class="mr-2">Subsidy amount: </b>Up to NT$5 million
                <div class="mt-2"></div>
                <b class="mr-2">For More Information<br>Website: </b>
                <a title="industry-incentive.taipei" target="_blank" href="https://industry-incentive.taipei/page-about-en.aspx">https://industry-incentive.taipei/page-about-en.aspx</a><br>
                <b class="mr-2">Contact: </b>Callers inside Taipei City 1999 ext.1429、1428 / Outside of Taipei City +886-2-27208889
            </div>
        </section>
    </section>
    <section class="container">
        <h2 id="smePl" class="subtitle">SME Innovation Development Project Loan</h2>
        <div class="intro-text">SME Innovation Development Project Loan (中小企業創新發展專案貸款) – For legally registered companies in Taiwan, if they fit in any of these requirements they are eligible to apply for this loan:</div>
        <div class="intro-text mt-3">
            <ul>
                <li>Company has won an innovation prize from the government.</li>
                <li>Company has received subsidies for research purposes from the government.</li>
                <li>Company has cooperated with overseas companies, governments or academic institutions or has been commissioned by overseas, or has provide development services for research purpose.</li>
                <li>Company has won enhanced investment SMEs project from the government.</li>
                <li>Company has research or production center in a national science park.</li>
                <li>Company has registered at the Taipei exchange center.</li>
                <li>Company has registered as social innovation enterprise or received B Lab certification by B Lab.</li>
            </ul>
        </div>
        <div class="mt-4" style="letter-spacing: 1px;">
            <b class="mr-2">Loan amount: </b>Up to NT$ 80 million for capital expense and up to NT$20 million for revolving fund
            <div class="mt-2"></div>
            <b class="mr-2">For More Information<br>Website: </b>
            <a title="moeasmea" target="_blank" href="https://www.sme.gov.tw/article-tw-2570-4235">https://www.sme.gov.tw/article-tw-2570-4235</a><br>
            <b class="mr-2">Email: </b><a title="award" href="mailto:service@smeg.org.tw">service@smeg.org.tw</a><br>
            <b class="mr-2">Contact: </b>0800-056-476
        </div>
    </section>
    <div class="mt-4 pb-4" style="background-color: rgba(61,186,250,.2)">
        <section class="container">
            <h2 id="sel" class="subtitle">Small Enterprise Loan</h2>
            <div class="intro-text">Small Enterprise Loan (企業小頭家貸款) – This loan is targeting legally registered companies with less than 10 employees and is provided from private banks.</div>
            <div class="mt-4" style="letter-spacing: 1px;">
                <b class="mr-2">Loan amount: </b>Up to NT$5 million for capital expense and up to 80% of the project for revolving fund
                <div class="mt-2"></div>
                <b class="mr-2">For More Information<br>Website: </b>
                <a title="moeasmea" target="_blank" href="https://www.sme.gov.tw/article-tw-2727-9323">https://www.sme.gov.tw/article-tw-2727-9323</a><br>
                <b class="mr-2">Email: </b><a title="award" href="mailto:service@smeg.org.tw">service@smeg.org.tw</a><br>
                <b class="mr-2">Contact: </b>0800-056-476
            </div>
        </section>
    </div>
    <section class="container mb-5">
        <h2 id="yefl" class="subtitle">Young Entrepreneur Financing Loan</h2>
        <div class="intro-text">Young entrepreneurs aged between 18 and 45 who are eligible for the Young Entrepreneur Financing Loans(青年創業及啟動金貸款) can apply for the loans at preferential interest rates when they are getting their new businesses off the ground, and benefit from the provision of direct credit guarantees to the 80%-95% range by the SME Credit Guarantee Fund with the maximum loan amount at NT$18 million. The loan is limited to reserve required by the business, registration fees, working capital, and capital expenditures.</div>
        <div class="mt-4" style="letter-spacing: 1px;">
            <b class="mr-2">Loan amount: </b><br>Up to NT$ 12 million for capital expense, <br>up to NT$ 4 million for revolving fund and <br>up to NT$ 2 million for reserves
            <div class="mt-2"></div>
            <b class="mr-2">For More Information<br>Website: </b>
            <a title="moeasmea" target="_blank" href="https://www.sme.gov.tw/article-tw-2570-4238">https://www.sme.gov.tw/article-tw-2570-4238</a><br>
            <b class="mr-2">Email: </b><a title="award" href="mailto:service@smeg.org.tw">service@smeg.org.tw</a><br>
            <b class="mr-2">Contact: </b>0800-056-476
        </div>
    </section>
@endsection

@push('page_script')

@endPush
