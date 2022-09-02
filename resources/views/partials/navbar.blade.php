<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container mb-10">
    <a class="navbar-brand" href="/">BukList</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarNav">
      <ul class="navbar-nav px-5 mx-auto">
        <li class="nav-item px-2">
          <a class="nav-link text-navbar-menu {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link text-navbar-menu {{ ($active === "posts") ? 'active' : '' }}" href="/posts">List Buku</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link text-navbar-menu {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Category</a>
        </li>
      </ul>


      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="/dashboard">
                <i class="bi bi-layout-text-window-reverse"></i>Dashboard
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li clas="nav-item">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
            Login</a>
        </li>
        @endauth
      </ul>


    </div>
  </div>
</nav>