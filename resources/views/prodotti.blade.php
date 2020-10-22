@extends('layouts.main')

@section('title')
    Prodotti
@endsection


@section('mainContent')

        <div class="containerMain">

            @if(!empty($paste))

                @foreach ($paste as $key => $tipoPasta)
                    <h2>{{$key}}</h2>
                    <ul>
                        @foreach ($tipoPasta as $item)
                            <li>
                                <img src="{{$item["src"]}}">
                                <div class="overlay-box">
                                    <a href="prodotti/show/{{$item["id"]}}"><span>{{$item["titolo"]}}</span></a>
                                    <a href="{{route('prodotto-singolo', $item['id'])}}" class="icon-svg"><img src="images/icon.svg"></a>
                                </div>
                            </li>    
                        @endforeach
                    </ul>
                @endforeach

            @endif

        </div>

@endsection