@extends('master.layout')


@section('title')
    Recherche
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h1>Résultat de la recherche</h1>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <h2>Recherche</h2>
                <form action="/students" method="get">
                    <input type="search" name="num">
                </form>
            </div>
        </div>
        <div class="row">
           <h5>{{ $student->lastname }} {{ $student->firstname }}</h5>
        </div>
    </div>
@endsection