<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Acerca de la aplicacion Ruleta Casino

Esta aplicacion cuenta con las siguientes funcionalidades:

    -CRUD de usuarios y apuestas.
    -Cada jugador al ser inicialmente creado cuenta con dinero igual a $10.000.
    -En cada ronda, cada jugador tiene un porcentaje el cual ronda entre los 8% y 15% en el cual se debe seleccionar cuando desea apostar.
    -En caso de que el jugador tenga menos de $1.000 se coloca automanticamente un All in, colocando la apuesta al 100%.
    -Ganadores por Verde ganaran el igual a 15 veces de su apuesta inicial, Ganadores por Rojo y Negro ganaran el igual a 2 veces de su apuesta inicial.
    -Los porcentajes so los siguientes: - 2% Azul.
                                        - 49% Rojo.
                                        - 49% Negro.
    -Para ejecutar una ronda de juego basta con actualizar la pagina o dar en el boton "Jugar!".
    -Cuenta con un contador el cual cada 3 minutos juega automaticamente.


## Instructivo para la instalacion del aplicativo

    -Tener instalado composer y xampp 
    -Ejecutar xampp y activar los servicios de MySQL y Apache
    -Descargar o clonar el repositorio dentro de la carpeta de ../xampp/htdocs
    -Ejecutar el comando en el cmd dentro de la carpeta descargada (ej: ../xampp/htdocs/ruletacasino) "composer update" (Se demora algunos minutos)
ora algunos minutos)
sql con cualquier nombre deseado para terminos practicos del ejemplo le llamaremos "ruletacasino".
    -Configurar el archivo ".env.example" modificando su nombre a ".env" y modificar "DB_DATABASE=ruletacasino" (colocando el mismo nombre de la bd) y modificando "DB_USERNAME=" "DB_PASSWORD=" siendo estos el usuario y contraseña respectivamente de la bd (si se tiene).
    -Ejecutar el comando "php artisan key:generate".
    -Ejecutar el comando "php artisan migrate".
    -Ejecutar el comando "php artisan serve".
    -Ingresar a la pagina (comunmente es la direccion http://127.0.0.1:8000/, esta direccion se puede observar en el cmd).
    -Se podra observar el boton de agregar jugadores en los cuales se coloca su nombre, el porcentaje que desea apostar y el color que desea.
    -Cada actualizacion o pulsación del boton "Jugar!" significa una ronda jugada, en la cual se expresa que color y quienes ganaron al igual que se procede a restar o sumar la suma perdida o ganada por cada jugador.
    -Si se desea, cada 3 minutos al no actualizar manualmente, se actualiza automaticamente la pagina realizando rondas automaticamente.