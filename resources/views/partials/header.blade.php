<header>
    <div class="contenitore">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <ul>
            <li><a href="{{ route('home-page') }}" class="{{ (Request::route()->getName() == 'home-page') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('prodotti') }}" class="{{ (Request::route()->getName() == 'prodotti') ? 'active' : '' }}">I Prodotti</a></li>
            <li><a href="{{ route('news') }}" class="{{ (Request::route()->getName() == 'news') ? 'active' : '' }}">News</a></li>
        </ul>
    </div>
</header>