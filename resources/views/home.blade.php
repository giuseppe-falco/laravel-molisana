@extends('layouts.main')



@section('mainContent')
    
        {{-- main --}}
            <div class="containerMain">
                @if (!empty($lunga))
                    <h2>LE LUNGHE</h2>
                    <ul>
                        @foreach ($lunga as $key => $item)
                        @include('Partials.product')
                        @endforeach
                    </ul>
                @endif
                
                @if (!empty($corta))
                    <h2>LE CORTE</h2>
                    <ul>
                        @foreach ($corta as $key => $item)
                        @include('Partials.product')
                        @endforeach
                    </ul>
                @endif
                
                @if (!empty($cortissima))
                    <h2>LE CORTISSIME</h2>
                    <ul>
                        @foreach ($cortissima as $key => $item)
                        @include('Partials.product')
                        @endforeach
                    </ul>
                @endif
            </div>
        {{-- /main --}}

@endsection
