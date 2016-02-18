<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('partials.assets.css')

    <link href="http://vjs.zencdn.net/5.0.2/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>

    <style>

    </style>

</head>
<body class="">

    @include('partials.navbar')

    @yield('header')

    <main class="">
            @yield('content')
    </main>

    @yield('footer')

    <!-- including javascript -->
    @include('partials.assets.javascript')

    <script src="http://vjs.zencdn.net/5.0.2/video.js"></script>

</body>
</html>