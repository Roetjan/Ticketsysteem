
<nav class="navbar navbar-expand text-bg-primary h-20">
    <div class="container-fluid w-75">
        <a href="{{ route('home') }}" class="navbar-brand">inc</a>
        <div class="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center font-weight-bold text-xl">
                <li class="nav-item">
                    <a href="{{ route('aboutUs') }}" class="nav-link color-red">Over ons</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                @if (Auth::user())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link" type="submit" >Uitloggen</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('listTickets') }}" class="nav-link">Tickets</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">Support</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Sign up</a>
                    </li>
                @endif
            </ul>
    </div>
</nav>