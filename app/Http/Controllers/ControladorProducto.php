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
    public function show($id){ // Usar id como entrada de pagina
        return $id; //Se manda como salida la variable de Id
    }
}
