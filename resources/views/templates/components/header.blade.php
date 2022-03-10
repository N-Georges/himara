    <!-- ========== HEADER ========== -->
    <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
            <!-- BRAND -->
            <div class="brand">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('himara/images/logo.svg') }}" alt="Hotel Himara">
                    </a>
                </div>
            </div>
            <!-- MOBILE MENU BUTTON -->
            <div id="toggle-menu-button" class="toggle-menu-button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <!-- MAIN MENU -->
            <nav id="main-menu" class="main-menu">
                <ul class="menu">
                    <li class="menu-item dropdown  {{ Route::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="menu-item dropdown {{ Route::is('room-list') ? 'active' : '' }}">
                        <a href="{{ route('rooms') }}">ROOMS</a>
                    </li>
                    <li class="menu-item dropdown {{ Route::is('blog') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="menu-item dropdown {{ Route::is('team') ? 'active' : '' }}">
                        <a href="{{ route('team') }}">TEAM</a>
                    </li>
                    <li class="menu-item dropdown {{ Route::is('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}">GALLERY</a>
                    </li>
                    <li class="menu-item {{ Route::is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                    <li class="menu-item menu-btn">
                        @if (Route::has('login'))
                            <div class="dropdown">
                                @auth
                                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </button>
                                @else
                                    <a href="{{ route('login') }}" class="btn">
                                        <i class="fa fa-user"></i>
                                        LOG IN</a>
                                @endauth
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item">
                                            <i class="fa fa-user"></i>
                                            DASHBOARD</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                                <i class="fa fa-sign-out"></i>
                                                LOG OUT</a>
                                        </form>
                                    @else
                                    @endauth
                                </div>
                            </div>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </header>
