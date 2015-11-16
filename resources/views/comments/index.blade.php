<div class="col s12 m9">
    <ul class="collection with-header z-depth-1">
        <li class="collection-header sucon-background-green">Kommentare</li>
        @foreach($comments as $comment)
        <li class="collection-item avatar">
            <i class="material-icons circle"><img src="{{ asset('/img/user/avatar_jane.jpg') }}" alt="" style="height: 45px; width: 45px;"></i>
            <span class="title">{{ \App\User::find($comment->userId)->name }}</span>
            <p>{{ $comment->content }}</p>
            <p class="secondary-content">
                <!-- TODO icon for edit -->
                <a href="{{ url('/comments/delete') . '/' . $comment->id }}"><i class="material-icons sucon-text-orange">delete</i></a>
            </p>
        </li>
        @endforeach
    </ul>
    <div>
        <!-- TODO format form -->
        @include('comments.create')
    </div>
</div>