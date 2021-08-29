@if ($errors->any())
    <br/><br/>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('success'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
    </div>
    @endif