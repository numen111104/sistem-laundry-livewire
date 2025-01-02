<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Authentication' }} | {{ config('app.name', 'Page') }}</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('js/vendors/vendors.min.js') }}" data-navigate-once></script>
    @stack('vendorScript')
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    @stack('pageScript')
    <script src="{{ asset('js/vendors/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('js/core/app-menu.min.js') }}" data-navigate-once></script>
    <script src="{{ asset('js/core/app.min.js') }}" data-navigate-once></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/scripts/pages/auth-register.min.js') }}" data-navigate-once></script>
    <!-- END: Page JS-->

    <script>
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
<!-- END: Body-->

</html>
