@push('vendorCss')
    <link data-navigate-once rel="stylesheet" type="text/css"
        href="{{ Vite::asset('resources/vendors/css/extensions/toastr.min.css') }}">
@endpush

@push('pageCss')
    <link data-navigate-once rel="stylesheet" type="text/css"
        href="{{ Vite::asset('resources/css/plugins/extensions/ext-component-toastr.css') }}">
@endpush

<div>
    User Dashboard
</div>

@push('vendorScript')
    <script data-navigate-once src="{{ asset('js/vendors/extensions/toastr.min.js') }}"></script>
@endpush

@push('pageScript')
    <script data-navigate-once src="{{ asset('js/scripts/extensions/ext-component-toastr.js') }}"></script>
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
