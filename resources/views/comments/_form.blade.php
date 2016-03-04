
<!-- TODO enctype security measure to prevent from uploading php and js files -->
<form action="{{ URL::to('comments') }}" method="post">

    <div class="row">
        <div class="input-field col s6">
            <input id="content" name="content" type="text" class="validate">
            <label for="content">Füge hier dein Kommentar ein</label>
        </div>
    </div>

    <input type="hidden" name="courseId" value="{{ $course->id }}"/>
    <input type="hidden" value = "{{csrf_token()}}" name="_token"/>

    <button class="waves-effect waves-teal btn-flat" type="submit" name="action">Kommentieren</button>
</form>


