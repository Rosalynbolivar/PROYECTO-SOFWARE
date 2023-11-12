<?php

namespace App\Http\Controllers;

use App\Models\tempyhum;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
            $data=tempyhum::all();
            return view('index',['tyh'=>$data]);
    }
    public function about(){
        $admins=[
            ['usuario'=>'Omar',
            'priv'=> '1',
        ],
        [
            'usuario'=>'Juan',
            'priv'=> '2',
        ],
        [
            'usuario'=>'Ronald',
            'priv'=> '2',
        ]
    ];
        return view('about',['admins'=>$admins]);
    }
    public function how(){
        return view('how');
    }
    public function edit($id){
        $tyh = tempyhum::where('idDatabase',$id)->first();
        return view('edit',['idDB'=>$id]);
    }
    public function add(){
        return view('add');
    }


    public function insert(Request $request)
    {
        $thm = new tempyhum;
        $thm->ubicacion = 'manual';
        $thm->temperatura = $request->input('tem');
        $thm->humedad = $request->input('hum');
        $thm->fechaHora = now();
        $thm->save();

        $data=tempyhum::all();

        return view('index',['tyh'=>$data])->with('status','Datos añadidos de manera adecuada');
    }
}