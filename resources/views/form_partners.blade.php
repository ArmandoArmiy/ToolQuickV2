<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ Form::text('PartnerName', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la persona']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Dirección:</strong>
            {{ Form::text('Address', null, ['class' => 'form-control', 'placeholder' => 'Domicilio']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Numero Telefonico:</strong>
            {{ Form::tel('PhoneNumber', null, ['class' => 'form-control', 'placeholder' => 'Numero telefonico personal o de la empresa']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Correo:</strong>
            {{ Form::email('Email', null, ['class' => 'form-control', 'placeholder' => 'Correo electronico']) }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Tipo de Socio:</strong>
            {{Form::select('PartnerType', ['Cliente' => 'Cliente', 'Proveedor' => 'Proveedor'], 'Proveedor') }}
        </div>
    </div>
</div>
