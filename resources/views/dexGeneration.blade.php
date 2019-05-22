@extends('layout')

@section('title')

@for($i = 1; $i <= 8; $i++)
    @if($generation == $i)
        Generation {{$generation}} Dex
    @endif
@endfor
@endsection

@section('content')
    <h1>Pokédex for generation {{$generation}}</h1>
    
    @foreach ($pokemons as $pokemon)
        <a href="pokemon?no={{$pokemon->id}}" class="btn btn-success m-2" style="background-color: #254839; border-color: purple;">{{$pokemon->name}}</a><br>
    @endforeach

@endsection
