<header class="min-width-100 width-100 max-width-100 pos-fixed d-flex j-c-end a-i-center">
    <i class="material-icons menu" style="color: #229911;">
        menu
    </i>
    <nav class="menu-link-container d-flex j-c-space-evenly a-i-center uppercase cur-point">
        @auth
            @if(Route::has('home'))
                <a href="{{ url('/home') }}" class="menu-link p-0-16 pos-relative font-primary-color font-weight-400">
                    Home
                </a>
            @endif
        @endauth
        @guest
            @if(Route::has('login'))
                <a href="{{ route('login') }}" class="menu-link p-0-16 pos-relative font-primary-color font-weight-400">
                    {{ __('login') }}
                </a>
            @endif
            @if(Route::has('register'))
                <a href="{{ route('register') }}" class="menu-link p-0-16 pos-relative font-primary-color font-weight-400">
                    {{ __('register') }}
                </a>
            @endif
        @endguest
    </nav>
</header>
<nav class="mobile-menu-link-container d-flex j-c-space-evenly a-i-center uppercase cur-point pos-fixed p-0-16">
    <div class="min-width-auto width-auto max-width-100 d-flex a-i-center m-t-16">
        <a href="{{ route('welcome') }}" class="logo-container d-flex j-c-center a-i-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Novatree eSolutions Pvt Ltd" title="Novatree eSolutions Pvt Ltd" class="logo min-width-auto width-auto max-width-100">
        </a>
    </div>
    @auth
        @if(Route::has('home'))
            <div class="min-width-auto width-auto max-width-100 d-flex a-i-center m-t-16">
                <i class="material-icons">
                    home
                </i>
                <a href="{{ route('welcome') }}" class="m-l-16 font-weight-400">
                    home
                </a>
            </div>
        @endif
    @endauth
    @guest
        @if(Route::has('login'))
            <div class="min-width-auto width-auto max-width-100 d-flex a-i-center m-t-16">
                <i class="material-icons">
                    vpn_key
                </i>
                <a href="{{ route('login') }}" class="m-l-16 font-weight-400">
                    {{ __('login') }}
                </a>
            </div>
        @endif
        @if(Route::has('register'))
            <div class="min-width-auto width-auto max-width-100 d-flex a-i-center">
                <i class="material-icons">
                    how_to_reg
                </i>
                <a href="{{ route('register') }}" class="m-l-16 font-weight-400">
                    {{ __('register') }}
                </a>
            </div>
        @endif
    @endguest
</nav>
