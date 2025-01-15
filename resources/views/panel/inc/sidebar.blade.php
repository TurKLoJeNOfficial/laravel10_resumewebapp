<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item navbar-brand-mini-wrapper">
            <a class="nav-link navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('panel')}}/images/logo-mini.svg" alt="logo" /></a>
        </li>
        <li class="nav-item nav-profile">
            <a href="{{route('profile')}}" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset($user->image)}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ $user->name }}</p>
                    <p class="designation">{{ $user->username }}</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Left Area</span></li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">
                <span class="menu-title">Profile</span>
                <i class="fa fa-user alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('skills')}}">
                <span class="menu-title">Skills</span>
                <i class="fa fa-asterisk alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('languages')}}">
                <span class="menu-title">Languages</span>
                <i class="fa fa-globe alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('references')}}">
                <span class="menu-title">References</span>
                <i class="fa fa-users alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Right Area</span></li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('experiences')}}">
                <span class="menu-title">Work Experiences</span>
                <i class="fa fa-suitcase alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('educations')}}">
                <span class="menu-title">Educations</span>
                <i class="fa fa-graduation-cap alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('projects')}}">
                <span class="menu-title">Projects</span>
                <i class="fa fa-database alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('certificates')}}">
                <span class="menu-title">Certificates</span>
                <i class="fa fa-certificate alt menu-icon"></i>
            </a>
        </li>

        <li class="nav-item nav-category"><span class="nav-link">General</span></li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}" target="_blank">
                <span class="menu-title">View Site</span>
                <i class="fa fa-sign-out alt menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('settings') }}">
                <span class="menu-title">Settings</span>
                <i class="fa fa-gear alt menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button class="nav-link" type="submit">
                    <span class="menu-title">Logout&nbsp;&nbsp;</span>
                    <i class="fa fa-sign-out-alt menu-icon"></i>
                </button>
            </form>
        </li>
    </ul>
</nav>
