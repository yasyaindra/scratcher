<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <title>Dashboard</title>
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header__toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>

      <div class="header__img">
        <img src="{{asset('img/perfil.jpg')}}" alt="" />
      </div>
    </header>

    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav__logo">
            <i class="bx bx-layer nav__logo-icon"></i>
            <span class="nav__logo-name">Scratcher</span>
          </a>

          <div class="nav__list">
            <a href="/dashboard" class="nav__link {{Request::is('dashboard') ? "active" : ''}}">
              <i class='bx bxs-dashboard nav__icon'></i>
              <span class="nav__name">Dashboard</span>
            </a>
            <a href="/dashboard/posts" class="nav__link {{Request::is('dashboard/posts') ? "active" : ''}}">
                <i class='bx bx-paperclip nav__icon'></i>
              <span class="nav__name">All Posts</span>
            </a>

            <a href="/dashboard/posts/create" class="nav__link {{Request::is('dashboard/posts/create') ? "active" : ''}}">
                <i class='bx bx-add-to-queue nav__icon'></i>
              <span class="nav__name">Create Post</span>
            </a>

            <a href="#" class="nav__link">
                <i class='bx bxs-folder-plus nav__icon' ></i>
              <span class="nav__name">All Categories</span>
            </a>

            <a href="#" class="nav__link">
                <i class='bx bx-add-to-queue nav__icon'></i>
              <span class="nav__name">Add Category</span>
            </a>

          </div>
        </div>


        <div>
          <a href="#" class="nav__link">
            <i class='bx bx-cog nav__icon' ></i>
            <span class="nav__name">Setting</span>
          </a>
          <form action="/logout" method="POST" id="nav-logout">
            @csrf
            <a type="submit" href="javascript:{}" onclick="document.getElementById('nav-logout').submit();" class="nav__link">
              <i class="bx bx-log-out nav__icon"></i>
              <span class="nav__name">Log Out</span>
            </a>
          </form>
        </div>
      </nav>
    </div>
    @yield('dashboard')
    <!--===== MAIN JS =====-->
    <script src="{{asset('js/dashboard.main.js')}}"></script>
  </body>
</html>
