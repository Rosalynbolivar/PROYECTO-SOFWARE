<?php

namespace App\Http\Controllers;

use App\Models\tempyhum;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
            return view('index');
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
