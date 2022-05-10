<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @can('is-admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Users</span>
            </a>
        </li>
     
        <li class="nav-item">
            <a class="nav-link" href="{{ route('articles.index') }}">
                <i class="fa fa-book"></i>
                <span>Articles</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('advertisements.index') }}">
                <i class="fa fa-ad"></i>
                <span>Advertisements</span>
            </a>
        </li>
    @endcan

    @can('access-contacts-list')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user-contact-us') }}">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Contact Us</span>
            </a>
        </li>
    @endcan

    @can('is-carehome')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('announcements.index') }}">
                <i class="fas fa-fw fa-bullhorn"></i>
                <span>Announcements</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-fw  fa-calendar"></i>
                <span>Events</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Donation</span>
            </a>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="#" onclick="$('#logout').submit();">
            <i class="fas fa-fw fa-sign-out"></i>
            <span>Logout</span>
        </a>
        <form id="logout" method="POST" action="{{ route('logout') }}">
            @csrf
        </form>
    </li>
</ul>