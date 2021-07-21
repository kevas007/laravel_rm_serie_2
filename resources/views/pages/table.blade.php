@extends('template.main')
@section('content')
    @foreach ($outils as $outil )
    <h2>{{ $outil->crayons }}</h2>
    <h2>{{ $outil->gommes }}</h2>
    <h2>{{ $outil->bics }}</h2>
    <h2>{{ $outil->regles }}</h2>
    @endforeach

@endsection
