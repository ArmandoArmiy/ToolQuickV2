@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Editar Socio</h2>
            </div>
            <div>
                <a href="{{ route('partners.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @include('error')

        {!! Form::model($partners, ['route' => ['partners.update', $partners], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('form_partner')
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection

