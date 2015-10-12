<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="container">
        <!-- TODO make modal-content smaller -->
        <div class="modal-content">
            <h4>Datei hinzufügen</h4>
            <p>Nachdem die Datei hinzugefügt wird, muss noch die Freigabe eines Administrators erfolgen bevor sie ersichtlich wird</p>
            <form action="#">
                <div class="row">
                    <div class="input-field col s12 m5">
                        <input id="upload-name" type="text" class="validate">
                        <label for="upload-name">Dateiname</label>
                    </div>
                    <div class="input-field col s12 m5">
                        <input id="upload-name" type="text" class="validate">
                        <label for="upload-name">Author</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field col s12 m10">
                        <div class="btn">
                            <span>Datei</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Freigabe anfordern</a>
        </div>
    </div>
</div>