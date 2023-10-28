@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark">Socios</h2>
            </div>
            <div>
                <form action="{{route('partners.create', $partner)}}" method="GET" class="d-inline">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-success mt-2">
                <strong>{{Session::get('success')}}<br></strong>
            </div>
        @endif

        <div class="col-12 mt-4">
            <table class="table table-bordered text-dark">
                <tr class="text-secondary">
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Numero Telefonico</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Acción</th>
                </tr>
                @foreach ($partner as $partner )
                    <tr>
                        <td class="fw-bold">{{$partner->PartnerName}}</td>
                        <td>{{$partner->Address}}</td>
                        <td>{{$partner->PhoneNumber}}</td>
                        <td>{{$partner->Email}}</td>
                        <td>{{$partner->PartnerType}}</td>
                        <td>
                            <form action="{{route('partners.edit', $partner)}}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{route('partners.destroy', $partner)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection