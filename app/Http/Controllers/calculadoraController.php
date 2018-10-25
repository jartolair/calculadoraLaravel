<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    public function index(Request $request){
    	$nombre = $request->input('nombre');
    	return view("calculadora",array('nombre' => $nombre ));
    }

    public function calcular(Request $request){
    	$nombre = $request->input('nombre');
    	$error='';
    	$n1 = $request->input('n1');
    	$n2 = $request->input('n2');
		$c = $request->input('c');
		if(!isset($n1) || !isset($n2)){
			$resultado= "ERROR";
			$error='Tienes que introducir los dos parametros';
		}else{
			switch ($c) {
				case 'Sumar':
					$resultado=($n1+$n2);
					break;
				case 'Restar':
					$resultado=($n1-$n2);
					break;
				case 'Multiplicar':
					$resultado=($n1*$n2);
					break;
				case 'Dividir':
					if ($n2!=0){
						$resultado=($n1/$n2);
					}else{
						$resultado= "ERROR";
						$error="No se puede dividir por 0";
					}
					break;
				case 'Elevar':
					$resultado=pow($n1,$n2);
					break;
				default:
					$resultado='No se pudo calcular';
					break;
			}    	
		}
		
		return view("calculadora",array('nombre' => $nombre,'resultado' => $resultado, 'error' => $error, 'n1'=>$n1,'n2'=>$n2));
    }
}
