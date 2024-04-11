<!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}" class="active">Home</a>
                </li>
                <li>
                    <a href="#0">movies</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('movies') }}">Movie List</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.ticket-plan') }}">Movie Ticket Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.seat-plan') }}">Movie Seat Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.checkout') }}">Movie Checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.food') }}">Movie Food</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">events</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('events') }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('events.details') }}">Event Details</a>
                        </li>
                        <li>
                            <a href="{{ route('events.speaker') }}">Event Speaker</a>
                        </li>
                        <li>
                            <a href="{{ route('events.ticket') }}">Event Ticket</a>
                        </li>
                        <li>
                            <a href="{{ route('events.checkout') }}">Event Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">sports</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('sports') }}">Sports</a>
                        </li>
                        <li>
                            <a href="{{ route('sports.details') }}">Sport Details</a>
                        </li>
                        <li>
                            <a href="{{ route('sports.ticket') }}">Sport Ticket</a>
                        </li>
                        <li>
                            <a href="{{ route('sports.checkout') }}">Sport Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">pages</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('app-download') }}">Apps Download</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('login-page') }}">Sign In</a>
                        </li>
                        <li>
                            <a href="{{ route('register-page') }}">Sign Up</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('page-not-found') }}">404</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">blog</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.details') }}">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">contact</a>
                </li>
                @if (Auth::check())
                <li>
                    <a>{{Auth::guard('web')->user()->name }}</a>
                    <ul class="submenu">
                        <li>
                            <a href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <a href="#">Wallet Balance : {{ Auth::guard('web')->user()->wallet }}</a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="header-button pr-0">
                    <a href="{{ route('register-page') }}">join us</a>
                </li>
                @endif
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header-Section========== -->