<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/3144/3144771.svg">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Casino</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        
        <!-- Styles -->
        <style>
            
        </style>
        
    </head>
    <body>
    <div id="page" class="col-m-9">

<h1 align="center">Información de jugadores</h1>
</div>
<div align="center" class="col-m-3">
@if($num != null)
    Color Ganador: 
    @if($num <= 2)
        VERDE
    @endif
    @if($num >= 3 && $num <= 51)
        ROJO
    @endif
    @if($num >= 52 && $num <= 100)
        NEGRO
    @endif
@endif
<br>
    @if($ganadores != null)
        @if($ganadores != null)
            Ganadores: 
        @foreach ($ganadores as $ganador)
            {{$ganador}}
        @endforeach
    @endif
@endif


</div>

<div class="col-md-12">
    
<div class="card">
    <div align="center"class="header">
        
            <!-- Ruta al create de jugador -->
            
            <a href="{{route('jugadores.create')}}" class="btn btn-default pull-right"  aria-hidden="true">
                <i class="fas fa-3x fa-user-plus" style="color:#0066ff; width:50px; height:50px;"></i></a>
        
            

        <p align="center" class="category">Aqui se muestran datos de los jugadores registrados.</p>
        
        
    </div>
    
    <div class="container">
        <div class="row" id="dataSend">
            @foreach($datos as $dato)
                <div class="col-sm-3" >
                <table class="table table-striped table-dark">
                 <div class="container" >
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td>{{$dato->nombre}}</td>
                        </tr>
                        <tr>
                            <td><strong>Dinero: </strong></td>
                            <td> {{$dato->dinero}} </td>
                        </tr>
                        <tr>
                            <td><strong>Apuesta: </strong></td>
                         
                            <td> {{$dato->porcentaje}}% </td>
                        </tr>
                        <tr>
                            <td><strong>Color: </strong></td>
                            <td> 
                                @if($dato->color == 1)
                                    VERDE
                                @endif
                                @if($dato->color == 2)
                                    ROJO
                                @endif
                                @if($dato->color == 3)
                                    NEGRO
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Acción: </strong></td>
                            <td>    <a href="{{route('jugadores.show', $dato->id)}}"><i class="far fa-eye"></i></a> &nbsp;&nbsp;
                                    <a href="{{route('jugadores.edit', $dato->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('destroy', $dato->id)}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </div>
            </div>
        </table>
                
                            <div data-nombre='{{$dato->nombre}}'></div>
                            <div data-per='Porcentajes'></div>
                            <div data-color='color'></div>
                </div>
                            <input id="usuario" name="usuario" type="hidden" value="{{$dato->nombre}}">
                            <input id="per" name="per" type="hidden" value="Porcentajes">
                            <input id="color" name="color" type="hidden" value="color">

                            
            @endforeach
        </div>
    </div>

    
        <div align="center">
        
        {!! Form::open(['redirect' => '/']) !!}

        {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true">Jugar!</i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg'))!!}

        {!! Form::close() !!}
            
        </div>
    </div>
   
</div>
</div>

   </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    

<script>
    /*$(function(){
       $('#jugar').click(function() {

            var usuario = $('#usuario').val();
            var usuarios = ['diego','camid','luz'];
            var arr = [];

           $('#dataSend').each(function(){
                var nombre = $(this).data('nombre');
                var color = $(this).data('color');
                var per = $(this).data('per');

                arr.push({
                    nombre:nombre,
                    color:color,
                    per:per
                });

            })

            $("#dataSend").find( "div" ).each(function() {
                var nombre = $(this).data('nombre');
                if(nombre != null){
                var test =  $('per').val()
                console.log(test);
                
                    var per = $(this).data('per');
                    var color = $(this).data('color');
                    var item = {
                            nombre:nombre,
                            color:color,
                            per:per
                        };

                    
                }
                    
            
           
            
            });

            console.log("arr",arr);
            

            $.ajax({
                url: "{{route('jugadores.store')}}",
                type: 'POST',
                headers:{'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')},
                dataType: 'json',
                data: { 
                    id: 4,
                    usuario: usuario ,
                    usuarios: usuarios
                    },
                success: function(response)
                {
                    console.log("response",response);
                    
                },
                error:function(r) {
                    console.log("error", r);
                    
                 
}
            });
       });
    });    
    
            
*/
</script>