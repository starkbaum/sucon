<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">

    <!-- Google Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colors.css') }}">

</head>
<body class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header mdl-layout__header--waterfall">

<header class="mdl-layout__header sucon-background-green">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Kurse</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="fixed-header-drawer-exp">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" name="sample"
                       id="fixed-header-drawer-exp" />
            </div>
        </div>
    </div>
    @yield('header')
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
        <img src="{{ asset('img/Logo.png') }}" alt="SUcon">
    </span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link sidebar-link" href="/courses">Kurse</a>
        <a class="mdl-navigation__link sidebar-link" href="/repositories">Snippets</a>
        <div class="divider"></div>
        <a class="mdl-navigation__link sidebar-link" href="">Link</a>
        <a class="mdl-navigation__link sidebar-link" href="/auth/logout">Logout</a>
    </nav>
</div>


<main class="mdl-layout__content">
    <div class="page-content">
        @yield('content')
    </div>
</main>




<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>

</body>
</html>