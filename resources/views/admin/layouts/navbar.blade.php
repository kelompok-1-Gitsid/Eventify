<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"> Profile </i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <form action="{{ route('logout') }}" class="dropdown-item text-center" method="post">
                    @csrf
                    <button type="submit">
                        <i class="fa fa-sign-out-alt mr-2"></i>
                        {{ __('Log Out') }}
                    </button>
                </form>
        </li>
    </ul>
</nav>
