<ul class="collection with-header z-depth-1">
    <li class="collection-header sucon-background-green">
        <h5>Unterlagen zur Freigabe</h5>
    </li>
    @foreach($dataForAcceptance as $singleData)
        <li class="collection-item avatar">
            <i class="circle">
                <img src="{{ asset('/img/extensions') . '/' . strtolower($singleData->extension) . '.png' }}" alt="" style="height: 50px; width: 50px;">
            </i>
            <span class="title">{{ $singleData->name }}</span>
            <p>{{ $singleData->author }}</p>
            <p class="secondary-content">
                <a href="/pdfViewer/web/viewer.html?file=/data/showPdf/{{ $singleData->id }}"><i class="material-icons sucon-text-orange">open_in_browser</i></a>
                <a href="{{ url('download') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
                <!-- TODO check if admin -->
                @if(Auth::user()->isUserAdmin())
                    <a href="{{ url('data/accept') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">done</i></a>
                    <a href="{{ url('data/delete') . '/' . $singleData->id }}"><i class="material-icons sucon-text-orange">delete</i></a>
                @endif
            </p>
        </li>
    @endforeach
</ul>