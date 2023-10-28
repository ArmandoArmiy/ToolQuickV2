@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center"> Lista de Socios</h2>
            </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Numero Telefonico</th>
                <th>Correo</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($partner as $partner )
                <tr>
                    <td class="fw-bold">{{$partner->PartnerName}}</td>
                    <td>{{$partner->Address}}</td>
                    <td>{{$partner->PhoneNumber}}</td>
                    <td>{{$partner->Email}}</td>
                    <td>{{$partner->PartnerType}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
