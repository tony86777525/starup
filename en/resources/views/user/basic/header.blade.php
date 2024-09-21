<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>a:after {
        content: "\f0da";
        float: right;
        border: none;
        font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: 0px;
        margin-left: 5px;
    }
</style>
<header>
    <div class="header-wrapper">
        <div class="center-content">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ route('user.index') }}" hreflang="en">
                    <img src="{{ asset('assets/img/Startup-Portal-Taiwan-LOGO.png')  }}" height="75" class="d-inline-block align-top" alt="Startup Portal Taiwan" title="Startup Portal Taiwan">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-2" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="PRDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Permit & Regulations
                            </a>
                            <div class="dropdown-menu" aria-labelledby="PRDropDown">
                                <a class="dropdown-item" href="{{ route('user.permit') }}" hreflang="en">Visas</a>
                                <a class="dropdown-item" href="{{ route('user.incorporation') }}" hreflang="en">Incorporation</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Service</a>
                            <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
                                <li class="dropdown-submenu">
                                    <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Funding</a>
                                    <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                                        <a class="dropdown-item" href="{{ route('user.incentive') }}" hreflang="en">Government Incentive</a>
                                        <a class="dropdown-item" target="_blank" href="https://www.contacttaiwan.tw/">Contact Taiwan</a>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Resource</a>
                                    <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                                        <a class="dropdown-item" href="{{ route('user.ia') }}" hreflang="en">Incubator & Accelerator</a>
                                        <a class="dropdown-item" href="{{ route('user.smt') }}" hreflang="en">Six Municipalities of Taiwan</a>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a id="dropdownMenu4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Network</a>
                                    <ul aria-labelledby="dropdownMenu4" class="dropdown-menu border-0 shadow">
                                        <a class="dropdown-item" href="{{ route('user.cc') }}" hreflang="en">Chamber & Community</a>
                                    </ul>
                                </li>
                                <a class="dropdown-item" href="https://www.startupterrace.tw/" target="_blank">Startup Terrace Linkou</a>
                                <a class="dropdown-item" href="https://www.yawan-startup.tw/en" target="_blank">Startup Terrace Kaohsiung</a>
                                <a class="dropdown-item" href="{{ route('user.innovation') }}" hreflang="en">Social Innovation</a>
                                <a class="dropdown-item" href="https://www.startupislandtaiwan.info/" target="_blank">Startup Island Taiwan</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="NSDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News & Story
                            </a>
                            <div class="dropdown-menu" aria-labelledby="NSDropDown">
                                <a class="dropdown-item" href="{{ route('user.news') }}" hreflang="en">News</a>
                                <a class="dropdown-item" href="{{ route('user.story') }}" hreflang="en">Story</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://startup.sme.gov.tw/home/" hreflang="zh-Hant" target="_blank">Taiwan Start-up</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
