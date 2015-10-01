@extends('app')

@section('header')
<!-- Bottom row, not visible on scroll -->
<div class="mdl-layout__header-row">
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Neu</a>
        <a class="mdl-navigation__link" href="">Java</a>
        <a class="mdl-navigation__link" href="">ABAP</a>
        <a class="mdl-navigation__link" href="">PHP</a>
        <a class="mdl-navigation__link" href="">HTML</a>
    </nav>
</div>
@endsection

@section('content')


    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Welcome</h2>
        </div>
        <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Mauris sagittis pellentesque lacus eleifend lacinia...
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                Get Started
            </a>
        </div>
        <div class="mdl-card__menu">
            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                <i class="material-icons">share</i>
            </button>
        </div>
    </div>




@endsection