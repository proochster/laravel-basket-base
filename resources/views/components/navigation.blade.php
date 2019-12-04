<nav class="navbar has-shadow is-spaced" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                <strong>{{ config('app.name', 'Laravel') }}</strong>
            </a>
{{--     
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a> --}}
        </div>
    
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="{{ url('/shop') }}" class="navbar-item" title="Shop">
                    Shop
                </a>
            </div>
    
            <div class="navbar-end">
                @guest
                    <a class="navbar-item" title="Sign up" href="{{-- route('register') --}}">Sign up</a>
                    <a class="navbar-item" title="Log in" href="{{-- route('login') --}}">Log in</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <span class="navbar-item navbar-link">Options</span>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{-- route('dashboard') --}}">Dashboard</a>
                            <a class="navbar-item" href="{{-- route('account') --}}">Account</a>
                            <a class="navbar-item" href="{{-- route('logout') --}}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{-- {{ __('Logout') }} --}}
                                Logout
                            </a>
                        </div>
                    </div>

                    <form id="logout-form" action="{{-- route('logout') --}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                @endguest
                
                <a class="navbar-item" title="Basket" href="{{ route('basket.index') }}">
                    <span>Basket</span>
                    <span class="tags navbar-item">
                        <span class="tag is-success is-rounded">{{ (!\Cart::isEmpty()) ? \Cart::getTotalQuantity() : '' }}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>
