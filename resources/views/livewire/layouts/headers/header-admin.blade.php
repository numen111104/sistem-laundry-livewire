<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu ficon">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item nav-search"><a class="nav-link" wire:click='toggleTheme'>{!! $theme !!}</a>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{ explode(' ', auth()->user()->name)[1] }}</span><span
                            class="user-status">{{ auth()->user()->role->name }}</span></div><span class="avatar"><img
                            class="round"
                            src="{{ auth()->user()->photo ? Storage::url(auth()->user()->photo) : Vite::avatar('avatar-ikhwan.jpg') }}"
                            alt="avatar" height="40" width="40"><span
                            class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="/profil-akun"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-50">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg> Profil</a>
                    <livewire:auth.logout />
            </li>
        </ul>
    </div>
</nav>

@push('pageScript')
    <script data-navigate-once>
        window.addEventListener('set-theme', (event) => {
            var html = $("html"),
                mainMenu = $(".main-menu"),
                navbar = $(".header-navbar");
            if (document.documentElement.getAttribute('data-layout') === 'dark-layout') {
                document.documentElement.setAttribute('data-layout', 'light-layout');
                html.removeClass("dark-layout").addClass("light-layout");
                mainMenu.removeClass("menu-dark").addClass("menu-light");
                navbar.removeClass("navbar-dark").addClass("navbar-light");
            } else {
                document.documentElement.setAttribute('data-layout', 'dark-layout');
                html.removeClass("light-layout").addClass("dark-layout");
                mainMenu.removeClass("menu-light").addClass("menu-dark");
                navbar.removeClass("navbar-light").addClass("navbar-dark");
            }
        });
    </script>
@endpush
