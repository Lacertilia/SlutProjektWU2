<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DexController extends Controller
{
    //

    public function genOne(){
        $unSortedPokemons = \App\Pokemon::all();

        $pokemons = [];

        foreach ($unSortedPokemons as $pokemon) {
            if((int)$pokemon->id <= 151){
                $pokemons += $pokemon;
            }
        }

       
        return view('dexGeneration', [
            'generation' => '1',
            'pokemons' => $pokemons
        ]);
    }

    public function pokemon(){
        $pokemonId = (int)$_GET['no'];

        $pokemon = \App\Pokemon::all()[($pokemonId-1)];

        return view('pokemon', [
            'pokemon' => $pokemon
        ]);
    }
}
