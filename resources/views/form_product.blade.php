<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Nombre del producto:</strong>
            {{ Form::text('ProductName', null, ['class' => 'form-control', 'placeholder' => 'Producto']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Descripción del producto:</strong>
            {{ Form::textarea('Description', null, ['class' => 'form-control', 'placeholder' => 'Descripción...']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Precio de Venta:</strong>
            {{ Form::number('SellingPrice', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Precio...']) }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Cantidad en inventario:</strong>
            {{ Form::number('QuantityInInventory', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Stock...']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Categoría:</strong>
            {{ Form::text('Category_id', null, ['class' => 'form-control', 'placeholder' => 'Categoria a la que pertenece...']) }}
        </div>
    </div>

</div>
