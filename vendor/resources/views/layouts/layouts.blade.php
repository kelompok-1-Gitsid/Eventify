<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
  </head>
  <body>
    <div class="wrapper">
        <aside id="sidebar">

            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#" class="d-flex justify-content-center fs-3">Eventify</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header fs-4">
                        Vendor Elements
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link fs-6 mt-2">
                            <i class="fa-solid fa-list"></i>
                            Dashboard
                        </a>
                        <a href="#" class="sidebar-link fs-6 mt-2">
                            <i class="fa-regular fa-user"></i>
                            Profil Vendor
                        </a>
                        <a href="#" class="sidebar-link fs-6 mt-2">
                            <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
                            Orders
                        </a>
                        <a href="#" class="sidebar-link fs-6 mt-2">
                            <i class="fa-solid fa-suitcase" style="color: #ffffff;"></i>
                            Product
                        </a>
                    </li>

                </ul>
            </div>

        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
            <button id="sidebar-toggle" class="btn">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="nav-icon md-0 pe-4">
                            <img src="{{asset ('assets/images/profile.jpg')}}" alt="Profile" class="avatar img-fluid rounded" width="42px">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Setting</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
          </nav>

        <main class="content px3 py2">
            <div class="container-fluid">
                @yield('content')
            </div>

        </main>
    </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f1c716ad48.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets') }}/js/script.js" type="text/javascript"></script>
  </body>
</html>
