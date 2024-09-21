<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11520067-6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-11520067-6');
</script>
<!-- Required meta tags -->
<meta name="google-site-verification" content="google0298ab1a73a377c5" />


<!-- share api -->
<script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=5de7c5c79b64ce001276e6d6&amp;product=inline-share-buttons"
        async="async"></script>
<!-- Start of &nbsp;Zendesk Widget script -->
<script id="ze-snippet"
        src="https://static.zdassets.com/ekr/snippet.js?key=b877af4c-7908-47db-866b-19356301dab6"></script>
<!-- End of &nbsp;Zendesk Widget script -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous"></script>

<script>
    window.SBX_dlc = window.SBX_dlc || {};
    window.SBX_dlc.settings = JSON.parse("{\"consoleLog\":false,\"eventColors\":true,\"eventCustomColors\":{\"custom1\":\"\",\"custom2\":\"\",\"custom3\":\"\"},\"gtmInjectId\":\"\",\"gtmInjectRule\":\"\",\"preventDefault\":false,\"jsonDefaultViewMode\":false}");
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>
    $(document).on('ajaxSetup', function (event, context) {
        // Enable AJAX handling of Flash messages on all AJAX requests
        context.options.flash = true;

        // Enable the StripeLoadIndicator on all AJAX requests
        context.options.loading = $.oc.stripeLoadIndicator;

        // Handle Error Messages by triggering a flashMsg of type error
        context.options.handleErrorMessage = function (message) {
            console.log(message);
            $.oc.flashMsg({text: message, class: 'error', interval: 5})
        }

        // Handle Flash Messages by triggering a flashMsg of the message type
        context.options.handleFlashMessage = function (message, type) {
            console.log(message);
            $.oc.flashMsg({text: message, class: type, interval: 5})
        }
    })
</script>

{{--header--}}
<script>
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).parents('.dropdown-menu').find('.show').removeClass("show");
            $(this).siblings().toggleClass("show");
        });
    });
</script>
