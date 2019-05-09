@extends('layout')

$intId = (int) $pokemon->id;

@if((int)$pokemon->id < 10){
    @section('title', '#00{{$pokemon->id}} - {{$pokemon->name}}')

}
@section('title', '#00{{$pokemon->id}} - {{$pokemon->name}}')

@section('content')
    
@endsection