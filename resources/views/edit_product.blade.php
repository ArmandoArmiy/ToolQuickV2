<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Editar Producto') }}
        </h2>
        <div>
            <a href="{{ route('product.index') }}" >Volver</a>
        </div>
    </x-slot>

        @include('error')

        {!! Form::model($product, ['route' => ['product.update', $product], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('form_product')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}

</x-app-layout>

