@csrf
<div class="flex flex-col">
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Transaction_id" class="text-gray-700 font-bold">ID de Transacción:</label>
            {{ Form::number('Transaction_id', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Identificador de la transacción']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Product_id" class="text-gray-700 font-bold">ID del Producto:</label>
            {{ Form::number('Product_id', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Identificador del producto']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Quantity" class="text-gray-700 font-bold">Cantidad:</label>
            {{ Form::number('Quantity', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Cantidad del producto']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="UnitPrice" class="text-gray-700 font-bold">Precio unitario:</label>
            {{ Form::number('UnitPrice', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Precio por unidad']) }}
        </div>
    </div>
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="Subtotal" class="text-gray-700 font-bold">Subtotal:</label>
            {{ Form::number('Subtotal', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Subtotal']) }}
        </div>
    </div>
</div>
