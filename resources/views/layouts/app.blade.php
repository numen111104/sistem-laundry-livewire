<!doctype html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? ' Pages' }} | {{ config('app.name', 'Home') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    @stack('vendorCss')
    @stack('pageCss')
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireChartsScripts
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    {{-- HEADERS --}}
    @include('layouts.headers.headers-component')
    {{-- SIDEBAR --}}
    @include('layouts.sidebars.sidebar-component')
    {{-- BOTTOM NAV
    @include('layouts.bottom-navs.bottom-nav-component') --}}
    <button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button"
        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5"></line>
            <polyline points="5 12 12 5 19 12"></polyline>
        </svg></button>

    {{-- CONTENT --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="p-0 content-wrapper container-xxl">
            @isset($breadcrumb)
                {{ $breadcrumb }}
            @endisset
            {{ $slot }}
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    {{-- FOOTER --}}
    @include('layouts.footer.footer')
    {{-- SCRIPT --}}
    <script src="{{ asset('js/vendors/vendors.min.js') }}" data-navigate-once></script>
    @stack('vendorScript')
    <script src="{{ asset('js/core/app-menu.min.js') }}" data-navigate-once></script>
    <script src="{{ asset('js/core/app.min.js') }}" data-navigate-once></script>
    @stack('pageScript')
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/duration.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/customParseFormat.js"></script>
    <script>
        dayjs.extend(window.dayjs_plugin_duration)
        dayjs.extend(window.dayjs_plugin_customParseFormat)
        document.addEventListener('livewire:navigated', () => {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
