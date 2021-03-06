<?php

namespace App\Http\Controllers;

use App\jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public static function index()
    {

        $jugadores = jugadores::all();
        /* Se genera un numero aleatorio entre 1 y 100 */
        $num = rand(1, 100);
        $ganadores = array();

        /* Condicionales para la ganancia o perdida de cada jugador */

        foreach ($jugadores as $jugador) {
            if ($num <= 2 && $jugador->color == 1) {
                array_push($ganadores, $jugador->nombre);
                $jugador->dinero = $jugador->dinero + (($jugador->dinero * ($jugador->porcentaje / 100)) * 15);
            } else if ($num >= 3 && $num <= 51 && $jugador->color == 2) {
                array_push($ganadores, $jugador->nombre);
                $jugador->dinero = $jugador->dinero + ($jugador->dinero * ($jugador->porcentaje / 100));
            } else if ($num >= 52 && $jugador->color == 3) {
                array_push($ganadores, $jugador->nombre);
                $jugador->dinero = $jugador->dinero + ($jugador->dinero * ($jugador->porcentaje / 100));
            } else {
                $jugador->dinero = $jugador->dinero - ($jugador->dinero * ($jugador->porcentaje / 100));
            }
            if ($jugador->dinero <= 1000) {
                $jugador->porcentaje = 100;
            }
            if ($jugador->porcentaje == 100 && $jugador->dinero > 1000) {
                $jugador->porcentaje = 8;
            }
            $jugador->save();
        }

        $datos = jugadores::all();


        return view('welcome', compact('datos', 'num', 'ganadores'));
    }

    public function create()
    {
        return view('jugadores.create');
    }


    public function store(Request $request)
    {
        
        $jugador = new jugadores;           

        $jugador->nombre         = $request->nombre;
        $jugador->dinero           = 10000;
        $jugador->porcentaje           = $request->porcentaje;
        $jugador->color           = $request->color;


        $jugador->save();                

        return redirect('/');       
    }


    public function show($id)
    {
        $dato = jugadores::find($id);
        return view('jugadores.show', compact('dato'));
    }


    public function edit($id)
    {
        $dato = jugadores::find($id);

        return view('jugadores.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        $dato = jugadores::find($id);

        $dato->nombre           = $request->nombre;
        
        /* Si el jugador ya perdio (llega a 0 de dinero), se coloca automaticamente el menor porcentaje,
        esto se hace para que si el jugador quiere volver a apostar entonces inicie con la menor apuesta posible */

        if ($dato->dinero == 0) {
            $dato->porcentaje = 8;
        } else {
            $dato->porcentaje      = $request->porcentaje;
        }
        $dato->dinero           = $request->dinero;
        $dato->color            = $request->color;

        $dato->save();

        return redirect('/');
    }


    public function destroy($id)
    {
        jugadores::destroy($id);
        return redirect('/');
    }

    
}
