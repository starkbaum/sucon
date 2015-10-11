@extends('pages')

@section('content')

    <div class="row">
        <div class="center-align">
            <form method="POST" action="/auth/login" class="col s3 center-align">
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
                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>

    </div>

@endsection