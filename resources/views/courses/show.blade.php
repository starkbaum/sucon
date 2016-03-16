@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>
            <li><a href="" class="disabled">{{ $course->name }}</a></li>
        </ul>
    </nav>

@endsection

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">

            @if( !$videos->isEmpty() )
            <div class="slider">
                <ul class="slides">
                    @foreach($videos as $video)
                        <li>
                            <video id="my-video" class="video-js" controls preload="none" data-setup="{}">
                                <source src="{{ route('getVideo', $video->id)  }}" type='{{ File::mimeType($video->path) }}'>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-content">
                    <p>{{ $course->description }}</p>

                </div>
                <div class="card-action right-align">
                    <!-- TODO only Admin -->
                    @if(Auth::user()->isUserAdmin())
                        <a href="{{ url('courses/delete', $course->id) }}" class="grey lighten-4 sucon-text-orange waves-effect waves-light btn"><i class="material-icons right">delete</i>Kurs löschen</a>
                    @endif
                    <a href="{{ url('courses/like', $course->id) }}" class="grey lighten-4 sucon-text-orange waves-effect waves-light btn">{{ $course->likesCount }}<i class="material-icons right">loyalty</i> Likes</a>
                </div>
            </div>

            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">
                    <h5>Unterlagen</h5>
                </li>
                @include('partials.dataListing', $data)
            </ul>
        </div>


        <!-- section for comments -->
        @include('comments.index', $comments)

    </div>

    <div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large sucon-background-orange">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a href="#modal1" class="teal btn-floating waves-effect waves-light sucon-background-orange modal-trigger tooltipped" data-position="left" data-delay="20" data-tooltip="Neue Datei hinzufügen"><i class="material-icons">description</i></a></li>
            <li><a href="{{ url('courses/create') }}" class="btn-floating deep-orange tooltipped" data-position="left" data-delay="20" data-tooltip="Neuen Kurs anlegen"><i class="material-icons">library_books</i></a></li>
        </ul>
    </div>

    @include('partials.modals.addFileModal', ['type' => $course, 'typeClass' => 'course', 'keywords' => $keywords])


@endsection