<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DexController extends Controller
{
    //

    public function genOne(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '1',
            'pokemons' => $pokemons
        ]);
    }

    public function genTwo(){
        $pokemons = \App\Pokemon::all();

        return view('dexGeneration', [
            'generation' => '2',
            'pokemons' => $pokemons
        ]);
    }

    public function genThree(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '3',
            'pokemons' => $pokemons
        ]);
    }

    public function genFour(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '4',
            'pokemons' => $pokemons
        ]);
    }

    public function genFive(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '5',
            'pokemons' => $pokemons
        ]);
    }

    public function genSix(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '6',
            'pokemons' => $pokemons
        ]);
    }

    public function genSeven(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '7',
            'pokemons' => $pokemons
        ]);
    }

    public function genEight(){
        $pokemons = \App\Pokemon::all();
        
        return view('dexGeneration', [
            'generation' => '8',
            'pokemons' => $pokemons
        ]);
    }

    public function pokemonGen1(){
        $pokemonId = (int)$_GET['no'];

        $pokemon = \App\Pokemon::all()[(int)($pokemonId-1)];

        return view('pokemon', [
            'pokemon' => $pokemon
        ]);
    }
}
