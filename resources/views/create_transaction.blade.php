<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Realizar Transacción') }}
        </h2>
        <div>
            <a href="{{ route('transaction.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </x-slot>

    @include('error')

    {!! Form::open(['route' => 'transaction.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @include('form_transaction')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
</x-app-layout>
