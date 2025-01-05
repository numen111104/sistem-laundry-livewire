@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ vendorCss('toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ pluginCss('ext-component-toastr.min.css') }}">
@endpush

<div>
    Walsan Dasjboard
</div>

@push('vendorScript')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ vendorCss('toastr.min.css') }}">
@endpush

@push('pageScript')
    <link data-navigate-once rel="stylesheet" type="text/css" href="{{ pluginCss('ext-component-toastr.min.css') }}">
    <script data-navigate-once>
        window.addEventListener('sukses-login', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['success'](
                    'Selamat Datang Kembali! {{ Auth::user()->name }}',
                    'Hallo!', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });

        window.addEventListener('sukses-register', function() {
            'use strict';
            var isRtl = $('html').attr('data-textdirection') === 'rtl';

            // On load Toast
            setTimeout(function() {
                toastr['success'](
                    'Yeay anda berhasil membuat akun',
                    'Berhasil', {
                        closeButton: true,
                        tapToDismiss: true,
                        rtl: isRtl
                    }
                );
            }, 500);
        });
    </script>
@endpush
