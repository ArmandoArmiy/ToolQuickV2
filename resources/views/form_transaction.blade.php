<div class="flex flex-col">
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="date" class="text-gray-700 font-bold">Fecha:</label>
            {{ Form::date('TransactionDate', null, ['class' => 'border border-gray-300 rounded w-full']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Partner_id" class="text-gray-700 font-bold">Partner:</label>
            {{ Form::select('Partner_id', $partner ->pluck('PartnerName', 'id'), null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ', 'required' => 'required', 'placeholder' => 'Elige un Asociado']) }}
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
            <label for="TransactionType" class="text-gray-700 font-bold">Tipo de Transaccion:</label>
            {{ Form::select('PartnerType', ['Venta' => 'Venta', 'Compra' => 'Compra'], 'Compra', ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5']) }}
        </div>
    </div>
</div>
