<nav class="navbar has-shadow is-spaced" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                <strong>{{ config('app.name', 'Laravel') }}</strong>
            </a>
    
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>
    
        <div class="navbar-menu">
            <div class="navbar-start">
            <a href="{{ url('/') }}" class="navbar-item">
                Home
            </a>
            </div>
    
            <div class="navbar-end">
                <div class="navbar-item">
                    @guest
                        <div class="buttons">
                            {{-- <a class="button is-primary is-outlined" href="{{ route('register') }}">Sign up</a>
                            <a class="button is-primary is-outlined" href="{{ route('login') }}">Log in</a> --}}
                        </div>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <span class="navbar-item navbar-link">Options</span>
                            <div class="navbar-dropdown">
                                {{-- <a class="navbar-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <a class="navbar-item" href="{{ route('account') }}">Account</a>
                                <a class="navbar-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a> --}}
                            </div>
                          </div>
                        </div>

                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> --}}
                        
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
