@foreach($data as $singleData)
    <li class="collection-item avatar">
        <i class="circle">
            <img src="{{ asset('/img/extensions') . '/' . pathinfo($singleData->path, PATHINFO_EXTENSION) . '.png' }}" alt="" style="height: 50px; width: 50px;">
        </i>
        <span class="title">{{ $singleData->name }}</span>
        <p>{{ $singleData->author }}</p>
        <p class="secondary-content">
            <!-- TODO open file in browser -->
            <a href="/pdfViewer/web/viewer.html?file=/data/showPdf/{{ $singleData->id }}" target="_blank" class="tooltipped" data-position="top" data-tooltip="Datei anzeigen"><i class="material-icons sucon-text-orange">open_in_browser</i></a>
            <a href="{{ url('download') . '/' . $singleData->id }}" class="tooltipped" data-position="top" data-tooltip="Datei herunterladen"><i class="material-icons sucon-text-orange">system_update_alt</i></a>
            <a href="{{ url('mail/sendFile', $singleData->id) }}" class="tooltipped" data-position="top" data-tooltip="Datei verschicken"><i class="material-icons sucon-text-orange">mail</i></a>
            <!-- TODO check if admin -->
            @if(Auth::user()->name === $singleData->author)
                <a href="{{ url('data/delete') . '/' . $singleData->id }}"  class="tooltipped" data-position="top" data-tooltip="Datei löschen"><i class="material-icons sucon-text-orange">delete</i></a>
            @endif
        </p>
    </li>
@endforeach