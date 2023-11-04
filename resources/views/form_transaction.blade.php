<div class="flex flex-col">
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="date" class="text-gray-700 font-bold">Fecha:</label>
            {{ Form::date('date', null, ['class' => 'border border-gray-300 rounded w-full']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Partner_id" class="text-gray-700 font-bold">Partner:</label>
            {{ Form::text('Partner_id', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Elige un Partner']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="TotalAmount" class="text-gray-700 font-bold">Total:</label>
            {{ Form::number('TotalAmount', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Total de la venta o compra']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="PartnerType" class="text-gray-700 font-bold">Tipo de Transaccion:</label>
            {{ Form::select('PartnerType', ['Venta' => 'Venta', 'Compra' => 'Compra'], 'Compra', ['class' => 'border border-gray-300 rounded w-full']) }}
        </div>
    </div>
</div>
