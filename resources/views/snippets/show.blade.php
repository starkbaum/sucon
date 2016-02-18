@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>
            <li><a href="" class="disabled">{{ $snippet->name }}</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/snippets/create') }}"><i class="tiny material-icons">library_add</i></a></li>
        </ul>
    </nav>

@endsection

@section('content')

    <div class="row">


        <div class="col s12 m9">
            <div class="card">
                <div class="card-content">
                    <span class="card-title sucon-text-green">{{ $snippet->name }}</span>
                    <p>{{ $snippet->description }}</p>
                    <p>{{ $snippet->name }}</p>
                    <p>{{ $snippet->customer()->first()->name }}</p>
                    <p>{{ $snippet->languages()->first()->name }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ url('/snippets/delete') . '/' . $snippet->id }}"><i class="small material-icons sucon-text-orange">delete</i></a>
                </div>
            </div>
        </div>

                    {{--<!-- section for additional data -->--}}
            {{--<div class="col s12 m9">--}}
                {{--<ul class="collection with-header z-depth-1">--}}
                    {{--<li class="collection-header sucon-background-green">--}}
                        {{--<h5>Unterlagen</h5>--}}
                        {{--<a class="btn-floating btn-large waves-effect waves-light sucon-background-orange modal-trigger" style="margin-bottom:-40px;" href="#modal1"><i class="material-icons">add</i></a>--}}
                    {{--</li>--}}
                    {{--@foreach($data as $singleData)--}}
                        {{--<li class="collection-item avatar">--}}
                            {{--<i class="circle">--}}
                                {{--<img src="{{ asset('/img/extensions') . '/' . pathinfo($singleData->path, PATHINFO_EXTENSION) . '.png' }}" alt="" style="height: 50px; width: 50px;">--}}
                            {{--</i>--}}
                            {{--<span class="title">{{ $singleData->name }} Extension: {{ pathinfo($singleData->path, PATHINFO_EXTENSION) }}</span>--}}
                            {{--<p>{{ $singleData->author }}</p>--}}
                            {{--<p>{{ $singleData->size }}</p>--}}
                            {{--<p class="secondary-content">--}}
                                {{--<!-- TODO open file in browser -->--}}
                                {{--<a href="#"><i class="material-icons sucon-text-orange">open_in_browser</i></a>--}}
                                {{--<a href="{{ url('download') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">system_update_alt</i></a>--}}
                                {{--<!-- TODO check if admin -->--}}
                                {{--@if(Auth::user()->name === $singleData->author)--}}
                                    {{--<a href="{{ url('data/delete') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">delete</i></a>--}}
                                {{--@endif--}}
                            {{--</p>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}

            <!-- section for comments -->

    </div>



@endsection