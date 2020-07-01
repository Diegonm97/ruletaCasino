<head>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/3144/3144771.svg"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Casino</title>
</head>

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-12">

    <h1 align="center">Informacion del jugador</h1>
</div>
<div class="col-md-12"align="center">

<div class="col-sm-3" >
        <table class="table table-hover table-striped">
            <div class="container">
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
                                    AZUL
                                @endif
                                @if($dato->color == 2)
                                    ROJO
                                @endif
                                @if($dato->color == 3)
                                    NEGRO
                                @endif
                            </td>
                        </tr>
                        

                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


