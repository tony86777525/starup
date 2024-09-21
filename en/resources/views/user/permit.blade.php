@extends('user.basic.wrapper')

@push('meta')
    <title>Visa and Work Permit | Startup Portal Taiwan</title>
    <meta name="description" content="Kind of Visas: Taiwan Entrepreneur Visa and Employment Gold Card are introduced here!">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Visa and Work Permit | Startup Portal Taiwan">
    <meta property="og:description" content="Kind of Visas: Taiwan Entrepreneur Visa and Employment Gold Card are introduced here!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ asset('assets/user.permit') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_permit.jpg') }}">
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
            <div class="overlay overlay-dark" style="background-color: rgba(0,0,0,.2);width: 100%;height: 100%;"></div>
        </div>
        <div class="banner-image" style="background-image:url('{{ asset('assets/img/bg_permit.jpg') }}');opacity:1;"></div>
        <h1 class="banner-text">
            Visa and Work Permit
        </h1>
    </section>
    <section style="text-align:center;margin-top:25px">
        <div class="subtitle-dash left-dash"></div>
        <h2 style="display:inline-block;color:#222831;font:bold 2.2rem Arial;">Kind of Visas</h2>
        <div class="subtitle-dash right-dash"></div>
    </section>
    <div class="row" style="margin:25px 0 0;text-align:center">
        <div class="col-lg-2 col-md-0"></div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:25px">
            <div class="card" style="text-align:center;font-size:1.1rem">
                <img class="card-img-top" src="{{ asset('assets/img/bg_visa1.jpg') }}" alt="TEV-bg_img">
                <div class="card-body">
                    <h3 class="card-title">Taiwan Entrepreneur Visa</h3>
                    <ul style="text-align:left;">
                        <li>Start-up entrepreneurs</li>
                        <li>Businesses with innovation and creativity</li>
                    </ul>
                    <a title="view" id="tev" href="#tev" class="btn btn-dark">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:25px">
            <div class="card" style="text-align:center;font-size:1.1rem">
                <img class="card-img-top" src="{{ asset('assets/img/bg_visa2.jpg') }}" alt="EGC-bg_img">
                <div class="card-body">
                    <h3 class="card-title">Employment Gold Card</h3>
                    <ul style="text-align:left">
                        <li>Four-in-one Visa</li>
                        <li>For foreign professionals</li>
                    </ul>
                    <a title="view" id="egc" href="#egc" class="btn btn-dark">View More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="visa-content" id="tev">
        <h2 class="visa-category">Taiwan Entrepreneur Visa</h2>
        <h3 style="margin-top:25px;text-align:center;font: bold 1.7rem Arial;">Benefit</h3>
        <div class="row" style="margin: 0;padding: 0 15px">
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">1</span></div>
                    <div class="list-item-content">No need to set up a business beforehand.</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">2</span></div>
                    <div class="list-item-content">Get residency for 2 year with unlimited entry.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">3</span></div>
                    <div class="list-item-content">Extend visa without leaving Taiwan (up to 2 years).</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">4</span></div>
                    <div class="list-item-content">One common application can for up to 3 members.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">5</span></div>
                    <div class="list-item-content">Eligible to apply for Young Entrepreneur Financing Loan.</div>
                </div>
            </div>
        </div>
        <br />
        <h3 style="margin-top:25px;text-align:center;font: bold 1.7rem Arial;">Qualification</h3>
        <h4 style="margin-top:7px;text-align:center;font: 1.2rem Arial;">Meet at least one of the criteria</h4>
        <div class="row" style="margin: 0; margin-top:20px; padding: 0 15px">
            <div class="col-xl-1"></div>
            <ol style="margin:0 auto;">
                <li><span style="color:#d65a31; font-weight: bold;">Received Investment</span>: foreign or domestic investment of NT$2 million</li>
                <li><span style="color:#d65a31; font-weight: bold;">Innovation Capability</span>: for innovation capability by government</li>
                <li><span style="color:#d65a31; font-weight: bold;">Professional Skill</span>: patent or other professional skill</li>
                <li><span style="color:#d65a31; font-weight: bold;">Right Registration in Taiwan</span>: plant variety rights, or animal name registration in Taiwan</li>
                <li><span style="color:#d65a31; font-weight: bold;">Stationed</span>: stationing in the parks or startup incubators, and recommended by such parks or incubators</li>
                <li><span style="color:#d65a31; font-weight: bold;">Reward</span>: awarded in startup or design competition / involved in foreigner entrepreneurship project</li>
                <li><span style="color:#d65a31; font-weight: bold;">Fashion Shows/Film Festival</span>: shortlisted or awarded</li>
                <li><span style="color:#d65a31; font-weight: bold;">Enterprise Established</span>: representative, managing position & investment of NT$1 million</li>
            </ol>
        </div>
        <br />
        <h3 style="margin-top:25px;text-align:center;font: bold 1.7rem Arial;">Application Process</h3>
        <div class="container">
            <ul class="nav nav-pills nav-justified mt-4 mb-5" id="pills-tab" role="tablist">
                <li class="nav-item" style="margin: 0 20px 0 0">
                    <a title="Foreign" class="nav-link active" id="pills-FA-tab" data-toggle="pill" href="#pills-FA" role="tab" aria-controls="pills-FA" aria-selected="true">Foreign Applicant</a>
                </li>
                <li class="nav-item" style="margin: 0 0 0 20px">
                    <a title="Hong Kong or Macao" class="nav-link" id="pills-HM-tab" data-toggle="pill" href="#pills-HM" role="tab" aria-controls="pills-HM" aria-selected="false">Hong Kong or Macao applicant</a>
                </li>
            </ul>
        </div>
        <div style="text-align:center" class="tab-content mb-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-FA" role="tabpanel" aria-labelledby="pills-FA-tab">
                <img alt="fa-process-230831" src="{{ asset('assets/img/fa-process-230831.png') }}" style="width:80%">
            </div>
            <div class="tab-pane fade" id="pills-HM" role="tabpanel" aria-labelledby="pills-HM-tab">
                <img alt="hm-process-230831" src="{{ asset('assets/img/hm-process-230831.png') }}" style="width:80%">
            </div>
        </div>
        <div class="container mt-2 mb-5">
            <b class="mr-2">For More Information</b><br>
            Online Application: <a href="https://coa.immigration.gov.tw/coa-frontend/four-in-one/entry/entrepreneur-visa">https://coa.immigration.gov.tw/coa-frontend/four-in-one/entry/entrepreneur-visa</a><br>
            <b>Contact Information: </b><br>
            Review of qualifications and conditions:<br>
            Investment Commission, MOEA; Tel: +886-2-3343-5700<br>
            Online application:<br>
            Computer operation / system maintenance consultation hotline: +886-2-27967162; Business hours: 08:30-17:30 Monday to Friday<br>
        </div>
    </div>
    <div class="visa-content" id="egc">
        <h2 class="visa-category">Employment Gold Card</h2>
        <h3 style="margin-top:25px;text-align:center;font: bold 1.7rem Arial;">Benefit</h3>
        <div class="row" style="margin: 0;padding: 0 15px">
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">1</span></div>
                    <div class="list-item-content">No need to be employed by a certain employee.</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">2</span></div>
                    <div class="list-item-content">Income exemption is provided under article 9 of the “law on employment and employment of foreign talents”.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">3</span></div>
                    <div class="list-item-content">The duration of the stay of visiting relatives of the immediate family is extended for up to 1 year.</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">4</span></div>
                    <div class="list-item-content">The spouse and minor children of the Employment Gold Card holder shall apply for the right to reside in Taiwan.</div>
                </div>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-xl-1"></div>
            <div class="col-sm-6 col-xl-5" style="margin-top:25px;">
                <div class="list-item">
                    <div class="list-item-content"><span class="badge badge-orange" style="border-radius:10rem;margin-right:.5em;font-size:1.5rem">5</span></div>
                    <div class="list-item-content">Participants of the national health insurance are not limited by residence time of 6 months, qualifications as refered in the following website.</div>
                </div>
            </div>
        </div>
        <h3 style="margin-top:25px;text-align:center;font: bold 1.7rem Arial;">Application Process</h3>
        <div class="mb-5" style="text-align:center">
            <img alt="EGC-chart" src="{{ asset('assets/img/egc-chart.png') }}" style="width:80%" />
        </div>
        <div class="container mt-2 mb-5">
            <b class="mr-2">For More Information</b><br>
            <b class="mr-2">Application Guide: </b><a title="goldcard" target="_blank" href="https://goldcard.nat.gov.tw/en/apply/">https://goldcard.nat.gov.tw/en/apply/</a><br>
            <b class="mr-2">Online Application: </b><a title="immigration" target="_blank" href="https://coa.immigration.gov.tw/coa-frontend/four-in-one/entry/golden-card">https://coa.immigration.gov.tw/coa-frontend/four-in-one/entry/golden-card</a><br>
        </div>
    </div>
@endsection

@push('page_script')
    <script>
        jQuery(document).ready(function($) {
            $('a[class^="btn"]').on('click', function(event) {
                $('.visa-content').hide();
                var target = $(this).attr('href');
                $('.visa-content'+target).fadeToggle(500);
            });
        });
    </script>
@endPush
