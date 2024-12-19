<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{ request()->routeIs('admin.dashboard') ? 'mm-active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.jobs') ? 'mm-active' : '' }}">
                <a href="{{ route('admin.jobs') }}" class="" aria-expanded="false">
                    <i class="fa fa-briefcase"></i>
                    <span class="nav-text">Jobs</span>
                </a>
            </li>
        </ul>
    </div>
</div>