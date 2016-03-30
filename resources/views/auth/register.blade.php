@extends('pages')


@section('content')

<div class="col s12 m6 l5">
    <div class="card card-register">
        <div class="card-content">
            <span class="card-title sucon-text-green">Registrieren</span>
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div class="row">
                    <div class="input-field col s12">
                        <input id="register-name" type="text" class="validate" name="name" value="{{ old('email') }}">
                        <label for="register-name">Name</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="register-email" type="email" class="validate" name="email" value="{{ old('email') }}">
                        <label for="register-email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="register-password" type="password" class="validate" name="password">
                        <label for="register-password">Passwort</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="register-password-confirmation" type="password" class="validate" name="password_confirmation">
                        <label for="register-password-confirmation">Passwort wiederholen</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light sucon-background-green" type="submit" name="action">Registrieren
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</div>

@include('auth._errors')

@endsection