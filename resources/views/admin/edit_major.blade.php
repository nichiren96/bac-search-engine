@extends('master.layout')


@section('title')
    Modifier un major
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h2>Modification d'un major</h2>
            <form action="/majors/{{ $major->id }}" method="post">
                {{ csrf_field() }}
                <p>Nom:  <input type="text" name="lastname" value="{{ $major->lastname }}"/></p>
                <p>Prénom:  <input type="text" name="firstname" value="{{ $major->firstname }}"/></p>
                <p>Série:  <input type="text" name="spec" value="{{ $major->spec }}"/></p>
                <p>Mention:  <input type="text" name="distinction" value="{{ $major->distinction }}"/></p>
                <p>Ecole d'origine:  <input type="text" name="high_school" value="{{ $major->high_school }}"/></p>
                <p>Centre:  <input type="text" name="center" value="{{ $major->center }}"/></p>
                <input type="submit">
            </form>
        </div>
    </div>
@endsection