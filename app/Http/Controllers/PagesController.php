<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //Logica para el index como usuarios:

        $admins=[
            ['usuario'=>'Omar',
            'priv'=> '1',
        ],
        [
            'usuario'=>'adm2',
            'priv'=> '2',
        ]
    ];
        return view('index',['administradores'=>$admins]);
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
}
