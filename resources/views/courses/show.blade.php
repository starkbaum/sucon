@extends('app')

@section('content')

    <div class="row">
        <div class="col s12 m9">
            <div class="card">
                <div class="card-image">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=900%C3%97500&w=900&h=500">
                    <span class="card-title">Kurs {{ $id }}</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#"><i class="small material-icons">thumb_up</i></a>
                    <a href="#"><i class="small material-icons">thumb_down</i></a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card-panel">
                <p>Next Video</p>
            </div>
        </div>

        <div class="col s12 m3">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header">Aktionen</li>
                <li class="collection-item">Später Ansehen</li>
                <li class="collection-item">Angesehen</li><!-- TODO icon -->
                <!-- <li class="collection-item">Favorit</li> -->
                <li class="collection-item">Geschwindigkeit 2x</li>
            </ul>
        </div>

        <div class="col s12 m9">
            <ul class="collection z-depth-1">
                @for($i = 1; $i <= 5; $i++)
                <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Title</span>
                    <p>First Line</p>
                    <p class="secondary-content">
                        <a href="#!"><i class="material-icons">open_in_browser</i></a>
                        <a href="#!"><i class="material-icons">system_update_alt</i></a>
                        <a href="#!"><i class="material-icons">delete</i></a>
                    </p>
                </li>
                @endfor
            </ul>
        </div>



        <div class="col s12 m9">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header">Kommentare</li>
                <li class="collection-item avatar">
                    <i class="material-icons circle">user</i>
                    <span class="title">Patrick Jane</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aspernatur atque eaque eius fuga labore neque, nulla quasi quis repellat sequi soluta tempora vero voluptatibus. Aliquam, culpa laudantium. Voluptas.</p>
                    <p class="secondary-content">
                        <a href="#!"><i class="material-icons">open_in_new</i></a>
                        <a href="#!"><i class="material-icons">system_update_alt</i></a>
                        <a href="#!"><i class="material-icons">delete</i></a>
                    </p>
                </li>
            </ul>
        </div>

    </div>


@endsection