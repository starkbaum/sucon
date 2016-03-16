@extends('app')

@section('header')

    @include('admin.filter')

@endsection

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">
            <div class="card grey lighten-4">
                <div class="card-content white-text">
                    <span class="card-title sucon-text-green">SUcon Knowledge Base: Aktivität</span>
                    <div class="container-fluid">
                        <canvas id="LineChart" style="width:50%;"></canvas>
                    </div>
                    {!! app()->chartline->render("LineChart", $numberOfPageViews) !!}
                </div>
            </div>
        </div>

        <div class="col s12 m9 l8">
            <div class="card grey lighten-4">
                <div class="card-content white-text">
                    <span class="card-title sucon-text-green">SUcon Knowledge Base: Anzeige Kurse</span>
                    <div class="container-fluid">
                        <canvas id="BarChartCourses" style="width:50%;"></canvas>
                    </div>

                    {!! app()->chartbar->render("BarChartCourses", $numberOfViewsPerCourse) !!}
                </div>
            </div>
        </div>

        <div class="col s12 m9 l8">
            <div class="card grey lighten-4">
                <div class="card-content white-text">
                    <span class="card-title sucon-text-green">SUcon Knowledge Base: Anzeige Snippets</span>
                    <div class="container-fluid">
                        <canvas id="BarChart" style="width:50%;"></canvas>
                    </div>

                    {!! app()->chartbar->render("BarChart", $numberOfViewsPerSnippet) !!}
                </div>
            </div>
        </div>
    </div>

@endsection