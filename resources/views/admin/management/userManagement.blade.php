@extends('app')

@section('header')

    @include('admin.filter', [$countNotAcceptedFiles])

@endsection

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">
            <ul class="collection">

                @foreach($users as $user)
                    <li class="collection-item avatar">
                        <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="" class="circle">
                        <span class="title">{{ $user->name }}</span>
                        <p>{{ $user->email }} <br />
                            {{ $user->is_admin ? "Admin" : "Mitarbeiter" }}
                        </p>
                        <a href="{{ url('admin/changeUserAdminRole', $user->id) }}" class="secondary-content"><i class="material-icons {{ $user->is_admin ? "red-text" : "blue-text" }}">grade</i></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection