<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{asset('panel')}}/images/logo.svg" alt="logo" class="logo-dark"/>
            <img src="{{asset('panel')}}/images/logo-light.svg" alt="logo-light" class="logo-light">
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('panel')}}/images/logo-mini.svg"
                                                                       alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome {{ $user->name }} !</h5>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <img class="img-xs rounded-circle ms-2" src="{{asset($user->image)}}"
                         alt="Profile image"> <span class="font-weight-normal"> {{ $user->name }} </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" width="100" src="{{asset($user->image)}}"
                             alt="Profile image">
                        <p class="mb-1 mt-3">{{ $user->username }}</p>
                        <p class="font-weight-light text-muted mb-0">{{ $user->email }}</p>
                    </div>
                    <a class="dropdown-item" href="{{route('profile')}}"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                    <a class="dropdown-item" href="{{route('password')}}"><i class="dropdown-item-icon fa-lock text-primary"></i> Change Password</a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="dropdown-item-icon icon-power text-primary"></i> Sign Out
                        </button>
                    </form>

                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
