@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>
            <li><a href="" class="disabled">{{ $snippet->name }}</a></li>
        </ul>
    </nav>

@endsection

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title sucon-text-green">{{ $snippet->name }}</span>
                    <p>programmiert für: {{ $snippet->customer()->first()->name }}</p>
                    <p>{{ $snippet->description }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ url('/snippets/delete') . '/' . $snippet->id }}"><i class="small material-icons sucon-text-orange">delete</i></a>
                </div>
            </div>
        </div>
        @unless($data->isEmpty())
        <!-- section for additional data -->
        <div class="col s12 m9 l8">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">
                    <h5>Unterlagen</h5>
                </li>
                @include('partials.dataListing', $data)
            </ul>
        </div>
        @endunless
    </div>

    <div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large sucon-background-orange">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a href="#modal1" class="teal btn-floating waves-effect waves-light sucon-background-orange modal-trigger tooltipped" data-position="left" data-delay="20" data-tooltip="Neue Datei hinzufügen"><i class="material-icons">description</i></a></li>
            <li><a href="{{ url('snippets/create') }}" class="btn-floating deep-orange tooltipped" data-position="left" data-delay="20" data-tooltip="Neues Snippet anlegen"><i class="material-icons">receipt</i></a></li>
        </ul>
    </div>

    @include('partials.modals.addFileModal', ['type' => $snippet, 'typeClass' => 'snippet'])

@endsection