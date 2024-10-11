<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class TestController extends Controller
{
    // funcion nueva fuction es codigo encapsulado cunaod lo requieramos 
    function test(){
        // conectar con el modelo que conecta a la BD

        $client = Client::find(1);
        var_dump($client);//imprimir todos los datos de paso para verificar que tenemos
       // retornar una vista con la informacion del modelo 

       return view ('testdb',['client'=> $client]);
    }
}
