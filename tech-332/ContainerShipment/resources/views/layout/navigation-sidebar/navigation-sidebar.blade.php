<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu">
            <li class="{{ Request::route()->getName() == 'home.dashboard' ? 'active' : '' }}">
                <a href="{{ route('home.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu" id="menu"></ul>
    </div>
</div>
