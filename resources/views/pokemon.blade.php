@extends('layout')



@section('title')
<?php $intId = (int) $pokemon->id;?>
@if ($intId < 10)
    #00{{$intId}} - {{$pokemon->name}}
@endif
@if($intId < 100 && $intId > 9)
    #0{{$intId}} - {{$pokemon->name}}
@endif
@if($intId > 99)
    #{{$intId}} - {{$pokemon->name}}
@endif
@endsection

@section('content')
    
@endsection