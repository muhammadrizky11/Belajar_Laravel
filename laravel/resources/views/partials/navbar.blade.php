
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-link {{ ($active ==="home") ? 'active' : '' }}" aria-current="page" href="/">Home</li>
                <li class="nav-link {{ ($active ==="about") ? 'active' : '' }}" href="/about">About</li>
                <li class="nav-link {{ ($active ==="post") ? 'active' : '' }}" href="/post">Blog</li>
                <li class="nav-link {{ ($active ==="categories") ? 'active' : '' }}" href="/categories">Categories</li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dahsboad</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> LogOut</a></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active ==="login") ? 'active' : '' }}">
                        <i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>


{{-- $title bisa diganti active juga --}}