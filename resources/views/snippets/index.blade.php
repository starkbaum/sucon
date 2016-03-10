@extends('app')

@section('header')

    @include('partials.filter', ['page' => 'snippets'])

@endsection

@section('content')

<div class="row">
    <div class="col s12 m9">

        <ul class="collection">
            @foreach($snippets as $snippet)
            <li class="collection-item avatar">
                <img src="{{ Avatar::create($snippet->customer()->first()->name)->toBase64() }}" alt="" class="circle">
                <span class="title">{{ $snippet->name }}</span>
                <p><a href="{{ url('customers/') . '/' . $snippet->customer()->first()->slug }}">
                        {{ $snippet->customer()->first()->name }}
                    </a></p>
                <p>Beschreibung:</p>
                <p>{{ $snippet->description }}</p>
                <a href="/snippets/{{ $snippet->slug }}" class="secondary-content">Zum Snippet</a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection