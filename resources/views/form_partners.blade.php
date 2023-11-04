<div class="flex flex-col">
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="PartnerName" class="text-gray-700 font-bold">Nombre:</label>
            {{ Form::text('PartnerName', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Nombre de la persona']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Address" class="text-gray-700 font-bold">Dirección:</label>
            {{ Form::text('Address', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Domicilio']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="PhoneNumber" class="text-gray-700 font-bold">Numero Telefonico:</label>
            {{ Form::tel('PhoneNumber', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Numero telefonico personal o de la empresa']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Email" class="text-gray-700 font-bold">Correo:</label>
            {{ Form::email('Email', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Correo electronico']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="PartnerType" class="text-gray-700 font-bold">Tipo de Socio:</label>
            {{ Form::select('PartnerType', ['Cliente' => 'Cliente', 'Proveedor' => 'Proveedor'], 'Proveedor', ['class' => 'border border-gray-300 rounded w-full']) }}
        </div>
    </div>
</div>
