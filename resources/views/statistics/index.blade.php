@extends('app')

@section('content')

    <h1>Statistics</h1>

    <div class="container-fluid">
        <canvas id="BarChart" style="width:50%;"></canvas>
    </div>

    <?php
    $data = array(
            'Jan' => array(33),
            'Feb' => array(32),
            'Mar' => array(12)
    );
    ?>

    @foreach($data as $singleData)

    @endforeach

    {!! app()->chartbar->render("BarChart", $data) !!}

@endsection