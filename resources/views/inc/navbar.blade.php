<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Donnert</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<br>