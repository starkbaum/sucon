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
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda commodi corporis excepturi hic inventore libero modi officia perspiciatis, possimus,
                        praesentium quas quasi quibusdam quidem reprehenderit sit sunt tempore unde, voluptate.
                    </p>
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

        <!-- section for additional data -->
        <div class="col s12 m9">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">
                    <h5>Unterlagen</h5>
                    @if(Auth::user()->is_admin == true || true)
                        <a class="btn-floating btn-large waves-effect waves-light sucon-background-orange modal-trigger" style="margin-bottom:-40px;" href="#modal1"><i class="material-icons">add</i></a>
                    @endif
                </li>
            @for($i = 1; $i <= 5; $i++)
                <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Title</span>
                    <p>First Line</p>
                    <p class="secondary-content">
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_browser</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">delete</i></a>
                    </p>
                </li>
            @endfor
            </ul>
        </div>

        <!-- section for comments -->
        <div class="col s12 m9">
            <ul class="collection with-header z-depth-1">
                <li class="collection-header sucon-background-green">Kommentare</li>
                <!-- first level comment -->
                <!-- TODO styling -->
                <li class="collection-item avatar">
                    <i class="material-icons circle"><img src="{{ asset('/img/user/avatar_jane.jpg') }}" alt="" style="height: 45px; width: 45px;"></i>
                    <span class="title">Patrick Jane</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ab accusantium aspernatur atque eaque eius fuga labore neque, nulla quasi quis repellat sequi soluta tempora vero voluptatibus.
                        Aliquam, culpa laudantium. Voluptas.
                    </p>
                    <p class="secondary-content">
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_new</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">delete</i></a>
                    </p>
                </li>
                <!-- second level comment -->
                <!-- TODO styling -->
                <li class="collection-item avatar">
                    <i class="material-icons circle"><img src="{{ asset('/img/user/avatar_lisbon.png') }}" alt="" style="height: 45px; width: 45px;"></i>
                    <span class="title">Teresa Lisbon</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ab accusantium aspernatur atque eaque eius fuga labore neque, nulla quasi quis repellat sequi soluta tempora vero voluptatibus.
                        Aliquam, culpa laudantium. Voluptas.
                    </p>
                    <p class="secondary-content">
                        <a href="#"><i class="material-icons sucon-text-orange">open_in_new</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                        <a href="#"><i class="material-icons sucon-text-orange">delete</i></a>
                    </p>
                </li>
            </ul>
        </div>

    </div>

    @include('partials.modals.addFileModal')


@endsection