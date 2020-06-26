<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calculo;

class CalculadoraController extends Controller
{
    //

    public function index(){

        return view('admin.calculadora.index'); 
    }

    public function calcular(Request $request){

        $operacao=$request->input('operacao');
        $n1=$request->input('n1');
        $n2=$request->input('n2');
        switch ($operacao) {
            
            case "+":
                $resultado = $request->input('n1') + $request->input('n2');
                Calculo::create([
                    'resultado'=> $resultado, 
                ]);
                return "$n1 + $n2 = $resultado";
              break;

              case "/":
                $resultado = $request->input('n1') / $request->input('n2');
                Calculo::create([
                    'resultado'=> $resultado, 
                ]);

                return "$n1 / $n2 = $resultado";
                
              break;

              case "*":
                $resultado = $request->input('n1') * $request->input('n2');
                Calculo::create([
                    'resultado'=> $resultado, 
                ]);

                return "$n1 * $n2 = $resultado";
              break;

              case "-":
                $resultado = $request->input('n1') - $request->input('n2');
                Calculo::create([
                    'resultado'=> $resultado, 
                ]);

                return "$n1 - $n2 = $resultado";
              break;
          }

    }

    public function outros(Request $request){
    




        return view('admin.calculadora.outros');
    }

}
