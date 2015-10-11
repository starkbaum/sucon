<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('partials.assets.css')

</head>
<body class="">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('partials.assets.javascript')

</body>
</html>