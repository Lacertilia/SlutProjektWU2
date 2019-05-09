@extends('layout')

@section('title', 'Generation 1')

@section('content')
    <h1>Pokédex for generation {{$generation}}</h1>

    @foreach ($pokemons as $pokemon)
        <a href="pokemon?no={{$pokemon->id}}">{{$pokemon->name}}</a><br>
    @endforeach

@endsection
