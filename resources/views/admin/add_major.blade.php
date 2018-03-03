@extends('master.layout')


@section('title')
    Ajout d'un major
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h2>Ajout d'un major</h2>
            <form action="/majors" method="post">
                {{ csrf_field() }}
                <p>Nom:  <input type="text" name="lastname"/></p>
                <p>Prénom:  <input type="text" name="firstname"/></p>
                <p>Série:  <input type="text" name="spec"/></p>
                <p>Mention:  <input type="text" name="distinction"/></p>
                <p>Ecole d'origine:  <input type="text" name="high_school"/></p>
                <p>Centre:  <input type="text" name="center"/></p>
                <input type="submit">
            </form>
        </div>
    </div>
@endsection