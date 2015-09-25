@extends('pages')

@section('content')

    <form class="form-signin" method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <h2 class="form-signin-heading">Anmelden</h2>
        <label for="login-email" class="sr-only">Email address</label>
        <input type="email" id="login-email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Passwort" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember" name="remember"> Angemeldet bleiben
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
    </form>

@endsection