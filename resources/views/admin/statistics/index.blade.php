@extends('app')

@section('header')

    @include('admin.filter')

@endsection

@section('content')

    <h1>Statistics Index</h1>

    <div class="row">

        <div class="col s12 m12 l8">
            <div class="container-fluid">
                <canvas id="LineChart" style="width:50%;"></canvas>
            </div>


            {!! app()->chartline->render("LineChart", $numberOfPageViews) !!}


            <div class="container-fluid">
                <canvas id="BarChart" style="width:50%;"></canvas>
            </div>

            {!! app()->chartbar->render("BarChart", $numberOfViewsPerCourse) !!}
        </div>



    </div>

@endsection