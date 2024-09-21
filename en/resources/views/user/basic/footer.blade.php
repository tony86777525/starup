<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ asset('assets/img/chevron-arrow-up.png') }}" style="height:15px;width:15px;"></button>
<footer>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-2">
                    <form method="POST" action="{{ route('user.send-mail') }}" id="sendMail">
                        <div class="mb-3 contact-title">Contact Us<input type="submit" value="Send" class="btn btn-default" style="position: absolute;right: 15px;"></div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                        <br>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Your email">
                        <br>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comments" style="height: 200px;"></textarea>
                    </form>

                    <div class="d-flex flex-wrap mt-4">
                        <a target="_blank" href="https://www.startupislandtaiwan.info/" class="btn btn-outline-light mt-2 mr-2">Startup Island Taiwan</a>
                        <a target="_blank" href="https://contacttaiwan.tw/Main/Index.aspx?lang=2" class="btn btn-outline-light mt-2 mr-2">Contact Taiwan</a>
                        <a target="_blank" href="https://investtaiwan.nat.gov.tw/homePage?lang=eng" class="btn btn-outline-light mt-2 mr-2">Invest Taiwan</a>
                        <a target="_blank" href="https://startup.sme.gov.tw/startupaward/index_eng.php" class="btn btn-outline-light mt-2 mr-2">Business Startup Award</a>
                        <a target="_blank" href="https://www.sbir.org.tw/project/introSBIRen" class="btn btn-outline-light mt-2 mr-2">SBIR</a>
                        <a target="_blank" href="https://angelinvestment.org.tw" class="btn btn-outline-light mt-2 mr-2">National Development Fund <br> Business Angel Investment Program</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mb-3 contact-title">Consulting Service</div>
                    <div class="bottomTitle1 mt-3">
                        <div class="mb-2">Startup Terrace Linkou</div>
                        <div class="mb-2">TEL : +886-2-23692358</div>
                        <div class="mb-2">EMAIL : <a href="mailto: hello@startupterrace.tw" style="color: white;text-decoration: underline;">hello@startupterrace.tw</a></div>
                        <div class="mb-2">WEB : <a href="//www.startupterrace.tw" target="_blank" style="color: white;text-decoration: underline;">www.startupterrace.tw</a></div>
                    </div>
                    <div class="bottomTitle1 mt-3">
                        <div class="mb-2">Startup Terrace Kaohsiung</div>
                        <div class="mb-2">TEL : +886-7-3383827</div>
                        <div class="mb-2">EMAIL : <a href="mailto: hello@yawan-startup.tw" style="color: white;text-decoration: underline;">hello@yawan-startup.tw</a></div>
                        <div class="mb-2">WEB : <a href="//www.yawan-startup.tw" target="_blank" style="color: white;text-decoration: underline;">www.yawan-startup.tw</a></div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-2"><a href="https://www.sme.gov.tw/" target="_blank"><img src="{{ asset('assets/img/smea-v2.png') }}" class="bottomPic"></a></div>
                        <div class="col-10"><div class="bottomTitle">Small and Medium Enterprise and Startup Administration, Ministry of Economic Affairs</div></div>
                    </div>
                    <div class="bottomTitle1 mt-3">
                        <div class="mb-2">ADD : 3rd Fl.No.95.Sec.2, Roosevelt Rd., Taipei 10646,Taiwan, R.O.C.</div>
                        <div class="mb-2">TEL : +886-2-2368-6858 / +886-2-2368-0816</div>
                        <div class="mb-2">FAX : +886-2-2367-1134</div>
                        <div class="mb-4">EMAIL : <a href="mailto: sme@careernet.org.tw" style="color: white;text-decoration: underline;">sme@careernet.org.tw</a></div>
                    </div>
                </div>
            </div>
            <div style="color: white; text-align: end">@2023 SMESA.All rights reserved</div>
        </div>
    </div>
</footer>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
