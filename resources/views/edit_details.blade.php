<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Editar Detalles') }}
        </h2>
        <div>
            <a href="{{ route('details.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </x-slot>
    @include('error')
    {{ Form::model($detail, ['route' => ['details.update', $detail], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
    @include('form_details')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</x-app-layout>
