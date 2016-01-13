@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Neue</a></li>
            <li><a href="{{ url('/customers/create') }}"><i class="tiny material-icons">library_add</i></a></li>
        </ul>
    </nav>

@endsection

@section('content')

    <div class="row">

        <table>
            <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Stadt</th>
                <th data-field="price">Zip Code</th>
                <th data-field="price">Straße</th>
                <th data-field="price">Kontaktemail</th>
                <th data-field="price">Telefon</th>
            </tr>
            </thead>

            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->zipCode }}</td>
                    <td>{{ $customer->street }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phoneNo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $customers->render()  !!}
    </div>

@endsection