<!DOCTYPE HTML>
<html>

<head>
    <script>
        (function(w, i, g) {
            w[g] = w[g] || [];
            if (typeof w[g].push == 'function') w[g].push(i)
        })
        (window, 'G-SEKJ4E9T4H', 'google_tags_first_party');

    </script>
    <script async src="https://preview.colorlib.com/s9cc/"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', 'developer_id.dYzg1YT', true);
        gtag('config', 'G-SEKJ4E9T4H');

    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.html">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    @if(app()->environment('local'))
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    @else
        <link rel="stylesheet" href="{{ config('app.url') }}/css/animate.css">
    @endif
    <!-- Icomoon Icon Fonts-->
    @if(app()->environment('local'))
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    @else
        <link rel="stylesheet" href="{{ config('app.url') }}/css/icomoon.css">
    @endif
    {{-- <link rel="stylesheet" href="{{ config('app.url') }}/css/icomoon.css"> --}}
    <!-- Bootstrap  -->
    @if(app()->environment('local'))
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @else
        <link rel="stylesheet" href="{{ config('app.url') }}/css/bootstrap.css">
    @endif
    {{-- <link rel="stylesheet" href="{{ config('app.url') }}/css/bootstrap.css"> --}}
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ app()->environment('local') ? asset('css/flexslider.css') : config('app.url') .'/css/flexslider.css'}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ app()->environment('local') ? asset('/fonts/flaticon/font/flaticon.html') : config('app.url') .'/fonts/flaticon/font/flaticon.html'}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ app()->environment('local') ? asset('/css/owl.carousel.min.css') : config('app.url') .'/css/owl.carousel.min.css'}} ">
    <link rel="stylesheet" href="{{ app()->environment('local') ? asset('/css/owl.theme.default.min.css') : config('app.url') .'/css/owl.theme.default.min.css'}}">
    <!-- Theme style  -->
    @if(app()->environment('local'))
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css">
    @endif
    {{-- <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css"> --}}

    <!-- Modernizr JS -->
    
    <script src="{{ app()->environment('local') ? asset('js/modernizr-2.6.2.min.js') : config('app.url') .'js/modernizr-2.6.2.min.js'}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
     @yield('content')

    <!-- jQuery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ app()->environment('local') ? asset('/js/jquery.min.js') : config('app.url') . '/js/jquery.min.js' }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ app()->environment('local') ? asset('/js/jquery.easing.1.3.js') : config('app.url') . '/js/jquery.easing.1.3.js' }}"></script>
    <!-- Bootstrap -->
    <script src="{{ app()->environment('local') ? asset('/js/bootstrap.min.js') : config('app.url') . '/js/bootstrap.min.js' }}"></script>
    <!-- Waypoints -->
    <script src="{{ app()->environment('local') ? asset('/js/jquery.waypoints.min.js') : config('app.url') . '/js/jquery.waypoints.min.js' }}"></script>
    <!-- Flexslider -->
    <script src="{{ app()->environment('local') ? asset('/js/jquery.flexslider-min.js') : config('app.url') . '/js/jquery.flexslider-min.js' }}"></script>
    <!-- Owl carousel -->
    <script src="{{ app()->environment('local') ? asset('/js/owl.carousel.min.js') : config('app.url') . '/js/owl.carousel.min.js' }}"></script>
    <!-- Counters -->
    <script src="{{ app()->environment('local') ? asset('/js/jquery.countTo.js') : config('app.url') . '/js/jquery.countTo.js' }}"></script>


    <!-- MAIN JS -->
    <script src="{{ app()->environment('local') ? asset('/js/main.js') : config('app.url') . '/js/main.js' }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96b500ea5b6cfcf3","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}' crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(() => {
                    alert.style.transition = "opacity 1s ease";
                    alert.style.opacity = "0";
                    setTimeout(() => alert.remove(), 1000);
                }, 3000); // 3 seconds
            }
        });
    </script>


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    let page = 1;

    $("#loadMoreBtn").on("click", function (e) {
        e.preventDefault();
        page++;

        $.ajax({
            url: "/projects/load-more?page=" + page,
            type: "GET",
            success: function (res) {
                if (res.html && res.count > 0) {
                        let newItems = $(res.html);

                        // force show all new animate-box items
                        newItems.find(".animate-box").css({
                            opacity: 1,
                            visibility: "visible"
                        });

                        // append them to the container
                        $("#projects-container").append(newItems);

                        // re-init animations (optional)
                        if (typeof contentWayPoint === "function") {
                            contentWayPoint();
                        }
                }

                    if (!res.html || res.count === 0) {
                        $("#loadMoreBtn").hide();
                    }
            },
            error: function () {
                alert("Something went wrong.");
            }
        });
    });
</script>
</body>

</html>
