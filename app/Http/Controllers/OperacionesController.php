<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    
    public function frm_suma(){

        return view('operaciones.frm_suma');

    }
    
    
    public function sumarOps(Request $request){

        $resultado = $request->num1+$request->num2;
        return view('operaciones.resultados',compact('resultado'));
        
    }

    public function cuadratica(){

        return view('operaciones.frm_cuadratica');

    }


    public function calcularCuadratica(Request $request){

        
        return $request;
        
        
        // $resultado = $request->num1+$request->num2;
        // return view('operaciones.resultados',compact('resultado'));
        
    }
    
}
