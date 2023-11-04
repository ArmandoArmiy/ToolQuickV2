<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Agregar Producto') }}
        </h2>
        <div>
            <a href="{{ route('product.index') }}" >Volver</a>
        </div>
    </x-slot>

    @include('error')

    {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @include('form_product')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}

</x-app-layout>
