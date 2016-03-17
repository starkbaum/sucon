@if($errors->any())

    <div class="col s12 m3 l3">
        <div class="card">
            <div class="card-content">
                <span class="card-title sucon-text-green">Fehler</span>
                <ul class="collection">
                    @foreach($errors->all() as $error)
                        <li class="collection-item avatar">
                            <img src="{{ asset('/img/icons/error_icon.png') }}" alt="" class="circle">
                            <span class="title">{{ $error }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endif