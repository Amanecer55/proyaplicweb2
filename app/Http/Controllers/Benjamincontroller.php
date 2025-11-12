<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //empleados//

class Benjamincontroller extends Controller 
{
public function benjaminbenjamin(){
    return view ("Examen.benjamin");

}
    public function guardabenjamin(request $request) {
        $this->validate($request,[
            'costo' => 'required|integer|min:100|max:200',
            'modelo' => 'required|string',
            'marca' => 'required',
            'accesorios' => 'array',
            'tipo' => 'required|in:E,A'

            //'Correo'=>'required|alpha',//
        ]);
        
    }
}