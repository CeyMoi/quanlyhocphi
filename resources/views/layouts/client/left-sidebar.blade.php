<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('client.index') ? 'active' : '' }}" href="{{ route('client.index') }}"><i class="fa fa-fw fa-home"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->routeIs('client.profile*') ? 'active' : '' }}" href="{{ route('client.profile.index') }}">
                            <i class="fa fa-fw fa-user-circle"></i>
                            <span>Thông tin cá nhân</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('client.logout') }}">
                            <i class="fa fa-fw fa-users"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>