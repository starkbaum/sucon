@extends('pages')


@section('content')

<div class="col s12 m6 l5">
    <div class="card card-login">
        <div class="card-content">
            <span class="card-title sucon-text-green">Anmelden</span>
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="login-email" type="email" class="validate" name="email" value="{{ old('email') }}">
                        <label for="login-email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div>
                    <input type="checkbox" id="login-remember" />
                    <label for="login-remember">Remember me</label>
                </div>
                <button class="btn waves-effect waves-light sucon-background-green" type="submit" name="action">Anmelden
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</div>

@include('auth._errors')

@endsection


