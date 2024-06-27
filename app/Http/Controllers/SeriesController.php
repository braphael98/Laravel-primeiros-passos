<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    //Request é um objeto em laravel, possui varios metodos !
    {
        $series = [
            'Sons of Anarchy',
            'Breaking Bad',
            'Arcane'
        ];
        
        


        //Aqui abaixo coloquei alguns exemplos de return para o html
        return view ('series.index')->with('series',$series);
        
        //return view('listar-series',compact('series'));

        // return view('listar-series', 
        //     ['series' => $series
        // ]);
    }
}
