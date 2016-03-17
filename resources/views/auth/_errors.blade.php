@if (count($errors) > 0)
    <ul class="collection">
        @foreach($errors->all() as $error)
            <li class="collection-item avatar">
                <img src="{{ asset('/img/icons/error_icon.png') }}" alt="" class="circle">
                <span class="title">{{ $error }}</span>
            </li>
        @endforeach
    </ul>
@endif