@extends('app')

@section('header')

    @include('admin.filter', [$countNotAcceptedFiles])

@endsection

@section('content')

    <h1>admin.index</h1>

@endsection