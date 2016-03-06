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
                @foreach($persons as $person)
                    {{ $person->name }}
                @endforeach
            @else

            @endif
        </div>
    </div>

    <div class="row">
        @foreach($snippets as $snippet)
            <h5>{{ $snippet->name }}</h5>
        @endforeach
    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ url('persons/create') }}" class="btn-floating sucon-background-orange modal-trigger"><i class="tiny material-icons">library_add</i></a>
    </div>


@endsection