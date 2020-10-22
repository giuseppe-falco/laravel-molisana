@extends('layouts.main')

@section('title')
    Prodotti
@endsection


@section('mainContent')
    

    <h1>{{$data["titolo"]}}</h1>
    <img src="{{$data["src-h"]}}" alt="">
    <img src="{{$data["src-p"]}}" alt="">
    <p>{{!!$data["descrizione"]!!}}</p>

    {{-- link precedente --}}
    @if ($id > 0)
        <a href="{{route('prodotto-singolo', $id - 1)}}">precedente</a>
    @endif

    {{-- link successivo --}}
    @if ($id < $length - 1)
        <a href="{{route('prodotto-singolo', $id + 1)}}">Successivo</a>
    @endif

@endsection