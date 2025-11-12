<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class ExamenJoelController extends Controller
{
    /**
     * Muestra el reporte de todos los animales.
     * Incluye nombre, especie, y ID (para el botón eliminar).
     */
    public function reporteAnimales()
    {
        // Consulta avanzada usando JOIN para obtener el nombre de la especie.
        // Se asume que las tablas se llaman 'animales' y 'especies' y usan 'id_especie'.
        $animales = DB::select("
            SELECT 
                a.id, 
                a.nombre AS nombre_animal,
                e.nombre AS nombre_especie
            FROM animales a
            INNER JOIN especies e ON a.id_especie = e.id
            ORDER BY a.nombre ASC
        ");

        // Se envía la lista de animales a la vista.
        return view('Examen.reportejoel')->with('animales', $animales);
    }

    /**
     * Lógica para eliminar un animal.
     * Se accede a través de la ruta POST.
     */
    public function eliminaAnimal(Request $request)
    {
        // Se elimina el registro usando SQL nativo o Eloquent (aquí se usa SQL nativo).
        DB::delete("DELETE FROM animales WHERE id = ?", [$request->id]);

        Session::flash('mensaje_animal', "El animal ha sido eliminado exitosamente.");
        return redirect()->route('reporteAnimales');
    }

    // Nota: Aquí se agregarían las funciones para 'alta' y 'edita'
}