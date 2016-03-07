@extends('app')

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">

            <div class="">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1">Statistiken</a></li>
                    <li class="tab col s3"><a class="active" href="#test2">Userverwaltung</a></li>
                    <li class="tab col s3"><a href="#test3">Dateifreigabe</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">Test 1</div>
            <div id="test2" class="col s12">Test 2</div>
            <div id="test3" class="col s12">@include('admin.management.fileAcceptance', $dataForAcceptance)</div>
        </div>
    </div>

@endsection