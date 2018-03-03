@extends('master.layout')


@section('title')
    Acceuil
@endsection


@section('content')
   <div class="container">
       <div class="row">
           <h1>Résultats</h1>
       </div>
       <div class="row">
           <div class="col-xs-6">
               <h2>Taux de réussite</h2>
               <ul>
                   @foreach($stats as $stat)
                       <li>{{ $stat->label }}: {{ $stat->success_rate }} %</li>
                   @endforeach
               </ul>

           </div>
           <div class="col-xs-6">
               <h2>Recherche</h2>
               <form action="/students" method="get">
                   <input type="search" name="num">
                   <input type="submit">
               </form>
           </div>
       </div>
       <div class="row">
           <h3>Les lauréats</h3>
           <ul>
               @foreach($majors as $major)
                   <li>{{ $major->lastname }} {{ $major->firstname }} <br/>
                       Mention: {{ $major->distinction }}<br/>
                       Série: {{ $major->spec }} Ecole d'origine: {{ $major->high_school }}<br/>
                       Centre d'examen: {{ $major->center }}
                   </li>
               @endforeach
           </ul>
       </div>
   </div>
@endsection