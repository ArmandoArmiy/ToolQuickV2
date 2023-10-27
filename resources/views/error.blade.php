@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>¡Por las chancas de mi madre!</strong> Algo fue mal...<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
