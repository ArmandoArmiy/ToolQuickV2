<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Fecha:</strong>
            {{ Form::date('date', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Partner:</strong>
            {{ Form::text('Partner_id', null, ['class' => 'form-control', 'placeholder' => 'Elige un Partner']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Total:</strong>
            {{ Form::number('TotalAmount', null, ['step' => '0.01', 'class' => 'form-control', 'placeholder' => 'Total de la venta o compra']) }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Tipo de Transaccion:</strong>
            {{Form::select('PartnerType', ['Venta' => 'Venta', 'Compra' => 'Compra'], 'Compra') }}
        </div>
    </div>
</div>
