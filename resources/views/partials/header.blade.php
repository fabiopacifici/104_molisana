<header id="site_header" class="text-center shadow">

    <img src="{{Vite::asset('resources/img/logo.png')}}" alt="">

    <nav class="nav justify-content-center">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }} " href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{ Route::currentRouteName() === 'products' ? 'bg-primary text-white' : '' }} " href="{{route('products')}}">Products</a>
        <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'bg-primary text-white' : '' }} " href="{{route('news')}}"> Blog</a>
        <a class="nav-link disabled" href="#"> Contacts</a>
    </nav>
</header>