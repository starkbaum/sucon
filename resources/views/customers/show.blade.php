@extends('app')

@section('content')

    <div class="row">
        <div class="col s12 m4 l4">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">{{ $customer->name }}</span>
                    <table>
                        <tbody>
                        <tr>
                            <td>Straße</td>
                            <td><a href="http://maps.google.com/?q={{ $customer->street }}" target="_blank">{{ $customer->street }}</a></td>
                        </tr>
                        <tr>
                            <td>Postleitzahl</td>
                            <td>{{ $customer->zipCode }}</td>
                        </tr>
                        <tr>
                            <td>Stadt</td>
                            <td>{{ $customer->city }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{ $customer->email }}" target="_top">{{ $customer->email }}</a></td>
                        </tr>
                        <tr>
                            <td>Telefon</td>
                            <td>{{ $customer->phoneNo }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href="{{ url('/customers/update', $customer->id) }}">Ändern</a>
                    <a href="{{ url('/customers/delete', $customer->id) }}">Löschen</a>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            @if (true)
                <div class="col s12 m12 l12">
                    <ul class="collection">
                        @foreach($persons as $person)
                            <li class="collection-item avatar">
                                <img src="{{ Avatar::create($person->name)->toBase64() }}" alt="" class="circle">
                                <span class="title">{{ $person->name }}</span>
                                <p>{{ $person->phoneNo }}</p>
                                <p><a href="mailto:{{ $person->email }}">{{ $person->email }}</a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else

            @endif
        </div>
    </div>

    <div class="row">
        <div class="col s12 m9 l8">

            <ul class="collection">
                @foreach($snippets as $snippet)
                    <li class="collection-item avatar">
                        <img src="{{ Avatar::create($snippet->customer()->first()->name)->toBase64() }}" alt="" class="circle">
                        <span class="title">{{ $snippet->name }}</span>
                        <p>Beschreibung:</p>
                        <p>{{ $snippet->description }}</p>
                        <a href="/snippets/{{ $snippet->slug }}" class="secondary-content">Zum Snippet</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ url('persons/create') }}" class="btn-floating sucon-background-orange modal-trigger"><i class="tiny material-icons">library_add</i></a>
    </div>


@endsection