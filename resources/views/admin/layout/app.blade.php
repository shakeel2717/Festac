@extends('layout.app')
@section('nav')
    <div id="accountNavbarDropdown"
        class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
        style="width: 16rem;">
        <div class="dropdown-item-text">
            <div class="media align-items-center">
                <div class="avatar avatar-sm avatar-circle mr-2">
                    <img class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                    <span class="card-title h5">{{ Auth::user()->name }}</span>
                    <span class="card-text">{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>

        <a class="dropdown-item" href="#">
            <span class="text-truncate pr-2" title="Manage Profile">Manage Profile</span>
        </a>
        <a class="dropdown-item" href="#">
            <span class="text-truncate pr-2" title="Manage Profile">Change Password</span>
        </a>

        <div class="dropdown-divider"></div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input class="dropdown-item" type="submit" value="Sign out">
            </a>
        </form>
    </div>
@endsection
@section('sidebar')
    <li class="nav-item">
        <small class="nav-subtitle" title="Overview">Overview</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.dashboard') }}" title="Layouts"
            data-placement="left">
            <i class="tio-dashboard-vs-outlined nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="Users Management">Users Management</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.users.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-group-junior nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All
                Users</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="Business Categories">Business Categories</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('admin.categories.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-label-important nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All
                Categories</span>
        </a>
    </li>

    <li class="nav-item">
        <div class="nav-divider"></div>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="Documentation">Exit</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link">
                <i class="tio-arrow-large-backward nav-icon"></i>
                Sign Out
            </button>
        </form>
    </li>
@endsection
