<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="flex-row nav navbar-nav">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::logo('logo.png') }}" width="40" height="30">
                    <h4 class="brand-text">{{ config('app.name') }}</h4>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>

    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
    </div>
</div>
<!-- END: Main Menu-->
