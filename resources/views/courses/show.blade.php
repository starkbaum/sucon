@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>
            <li><a href="" class="disabled">{{ $course->name }}</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/courses/create') }}"><i class="tiny material-icons">library_add</i></a></li>
        </ul>
    </nav>

@endsection

@section('content')

    <div class="row">

        <!-- TODO check if course has video data -->
        @if(true)

        <div class="col s12 m9">
            <div class="card">
                <div class="card-image">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=900%C3%97500&w=900&h=500">
                    <span class="card-title">{{ $course->name }}</span>
                </div>
                <div class="card-content">
                    <p>{{ $course->description }}</p>
                </div>
                <div class="card-action">
                    <a href="#"><i class="small material-icons sucon-text-orange">thumb_up</i></a>
                    <a href="#"><i class="small material-icons sucon-text-orange">thumb_down</i></a>
                </div>
            </div>
        </div>

        <!-- sidebar widget to switch to next video -->
        <!-- TODO make only visible when there is another video -->
        <div class="col s12 m3">
            <div class="card-panel">
                <p>Next Video</p>
            </div>
        </div>

        <!-- sidebar widget with video actions -->
        <div class="col s12 m3">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header">Aktionen</li>
                <li class="collection-item">Später Ansehen</li>
                <li class="collection-item">Angesehen</li><!-- TODO icon -->
                <!-- <li class="collection-item">Favorit</li> -->
                <li class="collection-item">Geschwindigkeit 2x</li>
            </ul>
        </div>

        @else

        <div class="col s12 m9">
            <div class="card">
                <div class="card-content">
                    <span class="card-title sucon-text-green">{{ $course->name }}</span>
                    <p>{{ $course->description }}</p>
                    <p>{{ $course->name }}</p>
                </div>
                <div class="card-action">
                    <a href="#"><i class="small material-icons sucon-text-orange">thumb_up</i></a>
                    <a href="#"><i class="small material-icons sucon-text-orange">thumb_down</i></a>
                </div>
            </div>
        </div>

        @endif

        <!-- section for additional data -->
        <div class="col s12 m9">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">
                    <h5>Unterlagen</h5>
                    <a class="btn-floating btn-large waves-effect waves-light sucon-background-orange modal-trigger" style="margin-bottom:-40px;" href="#modal1"><i class="material-icons">add</i></a>
                </li>
            @foreach($data as $singleData)
                <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">{{ $singleData->name }}</span>
                    <p>{{ $singleData->author }}</p>
                    <p class="secondary-content">
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_browser</i></a>
                        <a href="{{ url('download') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <a href="{{ url('data/delete') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">delete</i></a>
                    </p>
                </li>
            @endforeach
            </ul>
        </div>

        <!-- section for comments -->
        <div class="col s12 m9">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">Kommentare</li>

                @foreach($comments as $comment)

                <!-- first level comment -->
                <!-- TODO styling -->
                <li class="collection-item avatar">
                    <i class="material-icons circle"><img src="{{ asset('/img/user/avatar_jane.jpg') }}" alt="" style="height: 45px; width: 45px;"></i>
                    <span class="title">{{ \App\User::findOrFail($comment->userId)->name }}</span>
                    <p>{{ $comment->content }}</p>
                    <p class="secondary-content">
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_new</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">delete</i></a>
                    </p>
                </li>

                @endforeach
            </ul>
            <div>
                @include('comments.create')
            </div>
        </div>

    </div>

    @include('partials.modals.addFileModal')


@endsection