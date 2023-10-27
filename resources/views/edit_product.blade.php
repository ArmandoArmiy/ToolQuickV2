@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Editar Producto</h2>
            </div>
            <div>
                <a href="{{route('product.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @include('error')

        {!! Form::model($product, ['route' => ['product.update', $product], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('form_product')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>

@endsection
