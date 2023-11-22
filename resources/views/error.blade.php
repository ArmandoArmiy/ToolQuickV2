@if ($errors->any())
    <div class="bg-red-100 text-red-700 border border-red-400 rounded p-4 mt-4 text-center ">
        <strong>¡Algo fue mal!</strong> Verifica la información ingresada...<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
