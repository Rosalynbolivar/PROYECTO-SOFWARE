<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorProducto extends Controller
{
    public function index(){
        $title = "Bienvenido a mi proyecto de Laravel";
        $description = "Creado por Omar5867";
        
        //Metodo de compact para llamar y usar variables:
        return view("products.index",
        compact   ("title","description"));
    }
    public function about(){
        return 'Acerca de nosotros';
    }
    public function show($id){ // Usa nombre como entrada de pagina
        $data = [
            '1' => 'Temperatura',
            '2'=> 'Humedad'
        ];

        return view('products.index', [
            'products' => $data[$id] ?? 'producto con ID: ' . $id . ' no existe' //Revisa si exite en la tabla de datos
        ]);
    }
    public function districts(){
        $distritos=[
            'ASA'=> 'Alto Selva Alegre',
            'PA'=> 'Paucarpata',
            'CA'=> 'Cayma',
            'CH'=> 'Characato',
            'MI'=> 'Miraflores'
        ];
        return view('products.dist')->with('distritos',$distritos);
    }
}
