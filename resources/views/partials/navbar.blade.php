<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Hanif Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "home") ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "about") ? 'active' : ''  }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "posts") ? 'active' : ''  }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "categories") ? 'active' : ''  }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav  ms-auto">       
          @auth
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li class="dropdown-divider"></li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-arrow-right-square"></i> Logout</button>
                </form>
              </ul>
            </li>
          @else
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active == "login") ? 'active' : ''  }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          @endauth
        </ul>

      </div>
    </div>
</nav>