{{-- header --}}
<header>
    <div class="header-logo">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
    </div>
    <div class="header-nav">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active"><a href="{{route('prodotti')}}">Prodotti</a></li>
            <li><a href="{{route('news')}}">News</a></li>
        </ul>
    </div>
</header>
{{-- /header --}}