<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Crear') }}
        </h2>
        <div>
            <a href="{{ route('category.index') }}" >Volver</a>
        </div>
    </x-slot>

    @include('error')

    {!! Form::open(['route' => 'category.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @include('form_category')
    <div class="flex flex-col col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        {{ Form::submit('Guardar', ['class' => 'class="btn btn-blue"']) }}
    </div>
    {!! Form::close() !!}

</x-app-layout>
