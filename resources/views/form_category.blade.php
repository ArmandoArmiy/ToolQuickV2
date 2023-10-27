<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Nombre de la categoría:</strong>
            {{ Form::text('CategoryName', null, ['class' => 'form-control', 'placeholder' => 'Categoría']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
        <div class="form-group">
            <strong>Descripción de la Categoría:</strong>
            {{ Form::textarea('CategoryDescription', null, ['class' => 'form-control', 'style' => 'height:150px', 'placeholder' => 'Descripción...']) }}
        </div>
    </div>

</div>
