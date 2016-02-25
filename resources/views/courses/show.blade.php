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
                <video id="my-video" class="video-js" controls preload="auto" data-setup="{}" width="auto" height="auto">
                    <source src="{{ asset('/videos/christmas.mp4') }}" type='video/mp4'>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>

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
                    <i class="circle">
                        <img src="{{ asset('/img/extensions') . '/' . pathinfo($singleData->path, PATHINFO_EXTENSION) . '.png' }}" alt="" style="height: 50px; width: 50px;">
                    </i>
                    <span class="title">{{ $singleData->name }} Extension: {{ pathinfo($singleData->path, PATHINFO_EXTENSION) }}</span>
                    <p>{{ $singleData->author }}</p>
                    <p>{{ $singleData->size }}</p>
                    <p class="secondary-content">
                        <!-- TODO open file in browser -->
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_browser</i></a>
                        <a href="{{ url('download') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <!-- TODO check if admin -->
                        @if(Auth::user()->name === $singleData->author)
                        <a href="{{ url('data/delete') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">delete</i></a>
                        @endif
                    </p>
                </li>
            @endforeach
            </ul>
        </div>

        <!-- section for comments -->
        @include('comments.index', $comments)

    </div>

    @include('partials.modals.addFileModal', ['type' => $course, 'typeClass' => 'course', 'keywords' => $keywords])

@endsection