<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class examenjoelcontroller extends Controller
{

    public function reporteAnimales()
    {
        
        $animales = DB::select("
            SELECT 
                a.id, 
                a.nombre AS nombre_animal,
                e.nombre AS nombre_especie
            FROM animales a
            INNER JOIN especies e ON a.id_especie = e.id
            ORDER BY a.nombre ASC
        ");

        return view('Examen.reportejoel')->with('animales', $animales);
    }

   
    public function eliminaAnimal(Request $request)
    {
        
        DB::delete("DELETE FROM animales WHERE id = ?", [$request->id]);

        Session::flash('mensaje_animal', "El animal ha sido eliminado exitosamente.");
        return redirect()->route('reporteAnimales');
    }

}