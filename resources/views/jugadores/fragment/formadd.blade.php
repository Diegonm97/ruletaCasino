<div class="col-sm-12">

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('nombre','Nombre del jugador(*).')!!}
            {!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre del jugador.' , 'placeholder'=>'Ej: Diego', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombre','required'=>'required' ])!!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('dinero','Dinero disponible(*).')!!}
            {!!Form::number('dinero',10000,['class'=>'form-control','title'=>'Ingresa el dinero del jugador.' , 'placeholder'=>'Ej: 10000','id'=>'dinero','required'=>'required', 'disabled' ])!!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group row has-success">
    {!! Form::select('porcentaje', 
                                array(
                                    '8' => '8%',
                                    '9' => '9%',
                                    '10' => '10%',
                                    '11' => '11%',
                                    '12' => '12%',
                                    '13' => '13%',
                                    '14' => '14%',
                                    '15' => '15%'
                                    ), 
                                ); !!}

                                </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group row has-success">
    {!! Form::select('color', 
                                array(
                                    '1' => 'VERDE',
                                    '2' => 'ROJO',
                                    '3' => 'NEGRO'
                                    ), 
                                ); !!}

                                </div>
    </div>
</div>

<br>
<br>
<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true">Agregar</i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg'))!!}
</div> 