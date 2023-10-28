@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Editar Detalles </h2>
            </div>
            <div>
                <a href="{{route('details.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        {!! Form::model($details, ['route' => ['details.update', $details], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('form_category')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
