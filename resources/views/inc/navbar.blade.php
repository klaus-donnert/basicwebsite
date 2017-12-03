<nav class="navbar navbar-inverse">
      <a class="navbar-brand" href="/">Donnert</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav">
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
