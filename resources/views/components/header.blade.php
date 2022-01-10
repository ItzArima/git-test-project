<header>
    <div class="left">
        <div class="logo">
            <h1>LOGO</h1>
        </div>
    </div>
    <div class="right">
        <nav>
            @foreach(config('headerLinks') as $item)
                <a href="{{asset($item['href'])}}" class="{{Route::currentRouteName() === $item['href'] ? 'active' : ''}}">{{$item['name']}}</a>
            @endforeach
        </nav>
    </div>
</header>