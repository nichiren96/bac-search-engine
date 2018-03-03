@extends('master.layout')


@section('title')
    Statistiques
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h2>Ajout statistiques</h2>
            <form action="/stats" method="post">
                {{ csrf_field() }}
                <p>Libellé:  <input type="text" name="label"/></p>
                <p>Taux de réussite:  <input type="text" name="success_rate"/></p>
                <input type="submit">
            </form>
        </div>
    </div>
@endsection