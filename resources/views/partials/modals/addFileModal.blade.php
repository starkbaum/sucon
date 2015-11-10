<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="container">
        <!-- TODO make modal-content smaller -->
        <div class="modal-content">
            <h4>Datei hinzufügen</h4>
            <p>Nachdem die Datei hinzugefügt wird, muss noch die Freigabe eines Administrators erfolgen bevor sie ersichtlich wird</p>
            <p>{{ $course->slug }}</p>


            <form action="{{URL::to('courses/upload')}}" method="post" enctype="multipart/form-data">
                <label>Select Image to upload please</label>
                <br>
                <input type="file" name="file" id="file" />
                <input type="hidden" name="test" value="{{ $course->path_to_material }}"/>
                <input type="submit" name="submit" value="submit"/>
                <input type="hidden" value = "{{csrf_token()}}" name="_token"/>
            </form>

    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Freigabe anfordern</a>
    </div>
</div>
</div>