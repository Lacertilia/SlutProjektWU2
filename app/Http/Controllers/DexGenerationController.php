<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DexGenerationController extends Controller
{
    //

    public function genOne(){
        $pokemons = \App\Pokemon::all();

       
        return view('dexGeneration', [
            'generation' => '1',
            'pokemons' => $pokemons
        ]);
    }
}
