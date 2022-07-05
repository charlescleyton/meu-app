<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function user(Request $r) {
        
        $data = ['quantidade' => $r ->qnt];
        
        return view('usuarios', $data);
    }
    
    public function index() {
   
        $nome = 'Charles';  
        
        $data = ['nome' => $nome,];

        return view('welcome', $data);
    }

    public function exit() {
        return view('sair');
    }
}
