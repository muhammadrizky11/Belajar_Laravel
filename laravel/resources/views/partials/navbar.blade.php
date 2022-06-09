
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
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active ==="login") ? 'active' : '' }}">
                        <i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- $title bisa diganti active juga --}}