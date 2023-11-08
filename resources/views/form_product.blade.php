<div class="flex flex-col">
    <div class="w-full mt-2">
        <div class="form-group">
            <label for="CategoryDescription" class="text-gray-700 font-bold">Nombre del producto</label>
            {{ Form::text('ProductName', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Producto']) }}
        </div>
    </div>
    <div class="w-full mt-2">
             <label for="CategoryDescription" class="text-gray-700 font-bold">Descripción de la Producto:</label>
            {{ Form::textarea('Description', null, ['class' => 'border border-gray-300 rounded w-full h-24', 'placeholder' => 'Descripción...']) }}
    </div>
    <div class="w-full mt-2">
            <label for="CategoryDescription" class="text-gray-700 font-bold">Precio:</label>
            {{ Form::number('SellingPrice', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Precio...']) }}
    </div>

    <div class="w-full mt-2">
            <label for="CategoryDescription" class="text-gray-700 font-bold">Cantidad en inventario:</label>
            {{ Form::number('QuantityInInventory', null, ['step' => '0.01', 'class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Stock...']) }}
    </div>
    <div class="w-full mt-2">
            <label for="CategoryDescription" class="text-gray-700 font-bold">Categoría:</label>
            {{ Form::select('Category_id', $category ->pluck('CategoryName', 'id'), null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ', 'required' => 'required', 'placeholder' => 'Elige un categoría']) }}

</div>

</div>
