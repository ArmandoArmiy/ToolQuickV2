@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Agregar Producto</h2>
            </div>
            <div>
                <a href="{{route('product.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @include('error')

        {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @include('form_product')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
