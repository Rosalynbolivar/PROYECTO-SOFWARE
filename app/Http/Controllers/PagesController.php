<?php

namespace App\Http\Controllers;

use App\Models\tempyhum;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
            $data=tempyhum::paginate(2);
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
        ],
        [
            'usuario'=>'Ciolymar',
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
        
        return view('edit',['idDB'=>$id],compact('tyh'));
    }

    public function update(Request $request, $id){
        $thm = tempyhum::where('idDatabase',$id)->first();
        $thm->ubicacion = 'editado';
        $thm->temperatura = $request->input('tem');
        $thm->humedad = $request->input('hum');
        $thm->fechaHora = now();
        $thm->update();

        $data=tempyhum::paginate(2);

        return view('index',['tyh'=>$data])->with('status','Datos editados de manera adecuada');
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

        $data=tempyhum::paginate(2);

        return view('index',['tyh'=>$data])->with('status','Datos añadidos de manera adecuada');
    }

    public function delete($id){
        $thm = tempyhum::find($id);
        $thm->delete();

        $data=tempyhum::paginate(2);

        return view('index',['tyh'=>$data])->with('status','Datos eliminados de manera adecuada');
    }
}