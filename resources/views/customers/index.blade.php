@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
    </nav>

@endsection

@section('content')

    <div class="row">

        <div class="col s12 m9 l8 z-depth-1">
            <table>
                <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Stadt</th>
                    <th data-field="price">Postleitzahl</th>
                    <th data-field="price">Straße</th>
                    <th data-field="price">Kontaktemail</th>
                    <th data-field="price">Telefon</th>
                </tr>
                </thead>

                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td><a href="{{ url('customers') . '/' . $customer->slug }}">{{ $customer->name }}</a></td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->zipCode }}</td>
                        <td>{{ $customer->street }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phoneNo }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {!! $customers->render()  !!}
    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ url('/customers/create') }}" class="btn-floating btn-large sucon-background-orange"><i class="small material-icons">business</i></a>
    </div>

@endsection