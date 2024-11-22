<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

    @stack('meta')

    @include('user.basic.common_css')

    @stack('page_css')

    @stack('csrf_token')
</head>
<body>

@include('user.basic.header')

@yield('main')

@include('user.basic.footer')

@include('user.basic.common_js')

@stack('page_script')

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#252e39"
            },
            "button": {
                "background": "#14a7d0"
            }
        },
        "theme": "classic",
        "position": "bottom-left"
    });

    $('#sendMail').on('submit', function (e) {
        e.preventDefault();

        const button = $(this).find('[type="submit"]')
        const url = $(this).attr('action');

        const serializedData = $(this).serializeArray();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: url,
            dataType: "JSON",
            data: serializedData,
            beforeSend : function() {
                button.attr('disabled', true);
            },
            success: function (res) {
                if (res.type === true) {
                    $('body').append(`<p class="success flash-message fade in">${res.responseJSON ? res.responseJSON.message : (res.message ?? 'Success!')}<button type="button" class="close" aria-hidden="true">×</button></p>`);
                    setTimeout(() => {
                        $('.flash-message').remove();
                    }, 3000)
                } else {
                    $('body').append(`<p class="error flash-message fade in">${res.responseJSON ? res.responseJSON.message : (res.message ?? 'Error!')}<button type="button" class="close" aria-hidden="true">×</button></p>`);
                    setTimeout(() => {
                        $('.flash-message').remove();
                    }, 3000)
                }
            },
            complete: function () {
                button.attr('disabled', false);
            },
            error: function(res) {
                $('body').append(`<p class="error flash-message fade in">${res.responseJSON ? res.responseJSON.message : (res.message ?? 'Error!')}<button type="button" class="close" aria-hidden="true">×</button></p>`);
                setTimeout(() => {
                    $('.flash-message').remove();
                }, 3000)
            }
        });
    });

    $('body').on('click', '.flash-message .close', () => {
        $('.flash-message').remove();
    })
</script>
</body>
</html>
