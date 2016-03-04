@if($errors->any())

    <div class="row">
        <div class="col s12 m3 l3 offset-m5 offset-l5">
            <div class="card">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <ul class="">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endif