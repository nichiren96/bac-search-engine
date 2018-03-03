@extends('master.layout')


@section('title')
    Tableau de bord
@endsection


@section('content')
    <div class="container">
        <div class="row">
           <div class="col-xs-12">
               <h1>Dashboard</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <h2>Taux de réussite</h2>
                <ul>
                    @foreach($stats as $stat)
                        <li>
                            <a href="/stats/{{ $stat->id }}">
                                {{ $stat->label }}: {{ $stat->success_rate }} %
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="row">
            <h3>Les lauréats</h3>
            <ul>
                @foreach($majors as $major)
                    <li>
                        <a href="/majors/{{ $major->id }}">
                            {{ $major->lastname }} {{ $major->firstname }} | Série: {{ $major->spec }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection