@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>ID de Transacción:</strong>
            {{ Form::number('Transaction_id', null, ['class' => 'form-control', 'placeholder' => 'Identificador de la transacción']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>ID del Producto:</strong>
            {{ Form::number('Product_id', null, ['class' => 'form-control', 'placeholder' => 'Identificador del producto']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Cantidad:</strong>
            {{ Form::number('Quantity', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Cantidad del producto']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Precio unitario:</strong>
            {{ Form::number('UnitPrice', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Precio por unidad']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Subtotal:</strong>
            {{ Form::number('Subtotal', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Subtotal']) }}
        </div>
    </div>
</div>
