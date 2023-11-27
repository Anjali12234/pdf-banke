<!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
            <span class="brand">{{ __("Poultry Development Farm") }}
            </span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar" style="display: block;">
            <li class="">
                <div class="toggle-btn" onclick="toggleSidebar()">
                    <i class="fa fa-bars"></i>
                </div>
            </li>
            <li class=" ">
                <a class="nav-link ml-4 ">{{ __("Download the user manual.") }}</a>

            </li>

        </ul>

        <ul class="nav navbar-toolbar">
            @if (count(config('app.languages')) > 1)
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach (config('app.languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="{{ asset('frontend/assets/img/logo.png') }}" />
                    <span></span> {{ __("Super Admin") }}<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                    <li class="dropdown-divider"></li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off"></i>{{ __("Logout") }}</a>
                    </form>

                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->
