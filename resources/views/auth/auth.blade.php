@extends('pages')


@section('content')


    <div class="row">
        <div class="container">
            <div class="center-block" style="padding-top: 10em">
                <div class="col s12 m5 z-depth-1">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#login">Anmelden</a></li>
                        <li class="tab col s3"><a href="#register">Registrieren</a></li>
                    </ul>
                    <div id="login" class="col s12" style="padding: 1em;">@include('auth.login')</div>
                    <div id="register" class="col s12" style="padding: 1em;">@include('auth.register')</div>
                </div>
            </div>
        </div>
    </div>


@endsection