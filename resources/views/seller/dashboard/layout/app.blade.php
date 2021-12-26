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
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.dashboard') }}" title="Layouts"
            data-placement="left">
            <i class="tio-dashboard-vs-outlined nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="Work Place">Work Place</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>
    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('user.request.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-sort nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Order Management</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="My Account">My Account</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.profile.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-settings-outlined nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Profile Management</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.profile.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-new-message nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Edit Profile</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="Request Management">Request Management</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.request.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-shopping-basket-add nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">User Request</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.request.sent') }}" title="Layouts"
            data-placement="left">
            <i class="tio-bring-forward nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">My Sent Request</span>
        </a>
    </li>

    <li class="nav-item">
        <small class="nav-subtitle" title="My Account">Support Center</small>
        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.support.index') }}" title="Layouts"
            data-placement="left">
            <i class="tio-help nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Resolution Center</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="js-nav-tooltip-link nav-link " href="{{ route('seller.support.create') }}" title="Layouts"
            data-placement="left">
            <i class="tio-new-message nav-icon"></i>
            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Open new Ticket</span>
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
