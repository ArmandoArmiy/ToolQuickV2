<div class="flex flex-col">
    <div class="w-full mt-2">
        <label for="CategoryName" class="text-gray-700 font-bold">Nombre de la categoría:</label>
        {{ Form::text('CategoryName', null, ['class' => 'border border-gray-300 rounded w-full', 'placeholder' => 'Categoría']) }}
    </div>
    <div class="w-full mt-2">
        <label for="CategoryDescription" class="text-gray-700 font-bold">Descripción de la Categoría:</label>
        {{ Form::textarea('CategoryDescription', null, ['class' => 'border border-gray-300 rounded w-full h-24', 'placeholder' => 'Descripción...']) }}
    </div>
</div>
