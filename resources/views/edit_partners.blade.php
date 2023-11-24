<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-700 font-semibold text-xl leading-tight">
            {{ __('Editar Socio') }}
        </h2>
        <div>
            <a href="{{ route('partners.index') }}" >Volver</a>
        </div>
    </x-slot>

    @include('error')

    {!! Form::model($partner, ['route' => ['partners.update', $partner], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    @include('form_partners')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}

</x-app-layout>
