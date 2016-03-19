<!-- TODO enctype security measure to prevent from uploading php and js files -->
<form action="{{URL::to('data/upload')}}" method="post" enctype="multipart/form-data">


<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="container">
        <!-- TODO make modal-content smaller -->
        <div class="modal-content">
            <h4>Datei hinzufügen</h4>
            <p>Nachdem die Datei hinzugefügt wird, muss noch die Freigabe eines Administrators erfolgen bevor sie ersichtlich wird</p>

                <!-- Filename -->
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" name="name" type="text" class="validate">
                        <label for="name">Dateiname</label>
                    </div>
                </div>
                <!-- File Selection -->
                <div class="row">
                    <div class="file-field input-field col s6">
                        <div class="btn">
                            <span>Datei</span>
                            <input type="file" name="path" id="path" accept=".pdf">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="test" value="{{ $type->path_to_material }}"/>
                <input type="hidden" name="id" value="{{ $type->id }}"/>
                <input type="hidden" name="typeClass" value="{{ $typeClass }}"/>
                <input type="hidden" value = "{{csrf_token()}}" name="_token"/>
    </div>
    <div class="modal-footer">
        <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Freigabe anfordern</button>
    </div>
</div>
</div>
</form>
