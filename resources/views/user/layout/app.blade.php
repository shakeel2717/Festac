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
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.dashboard') }}" title="Layouts"
            data-placement="left">
            <i class="tio-dashboard-vs-outlined nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <small class="nav-subtitle" title="Request Management">Request Management</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>
    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.request.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-shopping-cart-add nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">All Requests</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.request.create') }}" title="Layouts"
            data-placement="left">
            <i class="tio-add-circle nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">New Request</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.request.received') }}" title="Layouts"
            data-placement="left">
            <i class="tio-checkmark-square nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Received Offer</span>
        </a>
    </li>


    <li class="nav-item">
        <small class="nav-subtitle" title="My Account">My Account</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.profile.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-settings-outlined nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Profile Management</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.profile.edit',['profile' => auth()->user()->id]) }}" title="Layouts"
            data-placement="left">
            <i class="tio-new-message nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Edit Profile</span>
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
