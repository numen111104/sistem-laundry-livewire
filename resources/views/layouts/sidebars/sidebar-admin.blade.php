<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="flex-row nav navbar-nav">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::logo('logo.png') }}" height="38">
                    <h4 class="brand-text">LM</h4>
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
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
            style="font-family: Poppins, serif">
            <li class="nav-item active">
                <a class="d-flex align-items-center" wire:navigate href="{{ route('admin::dashboardAdmin') }}"><i
                        data-feather="home"></i>
                    <span class="menu-title text-truncate">Dashboard</span>
                </a>
            </li>
            <!--Adab dan Ibadah-->
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Adab dan Ibadah Santri</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="award"></i>
                    <span class="menu-title text-truncate">Adab dan Ibadah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=" d-flex align-items-center" href="#"><i data-feather="book-open"></i>
                    <span class="menu-title text-truncate">Rapor Asrama</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="bar-chart"></i>
                    <span class="menu-title text-truncate">Statistik</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="#"><i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Pekanan</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="#"><i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Bulanan</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
