@if(count($errors))
    <div class="callout callout-danger">
        <h4>Errors!</h4>
        <div class="error-content">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif