<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="container">
        <!-- TODO make modal-content smaller -->
        <div class="modal-content">
            <h4>Datei hinzufügen</h4>
            <p>Nachdem die Datei hinzugefügt wird, muss noch die Freigabe eines Administrators erfolgen bevor sie ersichtlich wird</p>
            <p>{{ $course->slug }}</p>


            <form action="{{URL::to('courses/upload')}}" method="post" enctype="multipart/form-data">

                <br>
                <label for="filename">Filename</label>
                <input type="text" name="filename" id="filename"/>
                <br>
                <label for="file">Select Image to upload please</label>
                <input type="file" name="file" id="file" />
                <input type="hidden" name="test" value="{{ $course->path_to_material }}"/>
                <input type="hidden" name="courseId" value="{{ $course->id }}"/>
                <input type="submit" name="submit" value="submit"/>
                <input type="hidden" value = "{{csrf_token()}}" name="_token"/>
            </form>

    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Freigabe anfordern</a>
    </div>
</div>
</div>