@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Editar Categoria</h2>
            </div>
            <div>
                <a href="{{ route('category.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <strong>Por las chancas de mi madre!</strong> Algo fue mal...<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($category, ['route' => ['category.update', $category], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('form_category')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
