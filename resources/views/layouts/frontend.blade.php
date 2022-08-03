<!DOCTYPE html>
<html class="no-js" lang="">

<head>
        <meta charset="utf-8" />
            <title>Tanyoe Rasa</title>
            <meta name="description" content="" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
    
            <meta property="og:title" content="" />
            <meta property="og:description" content="" />
            <meta property="og:url" content="" />
            <meta property="og:image" content="" />
    
            <link rel="manifest" href="site.webmanifest" />
            <link rel="apple-touch-icon" href="{{ url('/frontend/src/images/favicon.ico') }}" />
            <!-- Place favicon.ico in the root directory -->
    
            <link rel="stylesheet" href="{{ url('/frontend/src/css/app.minify.css') }}" />
            <link rel="icon" href="{{ url('/frontend/src/images/favicon.ico') }}" />
    
            <meta name="theme-color" content="#000" />
</head>

<body>
    <!-- Add your site or application content here -->

    @include('components.frontend.navbar')

    @yield('content')

    @include('components.frontend.footer')

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () {
        ga.q.push(arguments);
        };
        ga.q = [];
        ga.l = +new Date();
        ga("create", "UA-XXXXX-Y", "auto");
        ga("set", "anonymizeIp", true);
        ga("set", "transport", "beacon");
        ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>4
    <script src="{{ url('js/app.js') }}"></script>
</body>

</html>