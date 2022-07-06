<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {

        
        $qualquer_coisa = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ] ];
    
        return view('welcome', $qualquer_coisa);
    }
}
