@extends('app')

@section('header')

    @include('partials.filter', ['page' => 'snippets'])

@endsection

@section('content')

    <div class="row">

        <ul class="collection">
            @foreach($snippets as $snippet)
            <li class="collection-item avatar">
                <img src="http://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/0021/9878/brand.gif?itok=038iFTom" alt="" class="circle">
                <span class="title">{{ $snippet->name }}</span>
                <p>Kunde: {{ $snippet->customer()->first()->name }}</p>
                <p>Programmiersprache: {{ $snippet->languages()->first()->name }}</p>
                <div>
                    @foreach($snippet->keywords as $keyword)
                    <div class="chip">{{ $keyword->name }}</div>
                    @endforeach
                </div>
                <a href="/snippets/{{ $snippet->slug }}" class="secondary-content">Zum Snippet</a>
            </li>
            @endforeach
        </ul>
    </div>

@endsection