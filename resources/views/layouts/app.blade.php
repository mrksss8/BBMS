<!DOCTYPE html>
<html>

<head>



    <!-- My Custom Import CSS -->
    @yield('data_tables_css')
    <!-- My Custom Import CSS -->

    <!-- sweet alert style -->
    {{-- <link href="{{ asset('vendor/css/sweetalert/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/css/sweetalert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- sweet alert style -->

    <!-- My Custom Style -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <title>@yield('title') | {{ config('app.name') }}</title> --}}
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/iziToast.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('page_css')


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">
    @yield('page_css')
    @yield('css')

    <!-- My Custom Style -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
        }

    </style>

</head>

<body>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('layouts.header')
            </nav>
            <div class="main-sidebar main-sidebar-postion">
                @include('layouts.sidebar')
            </div>
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('layouts.footer')
            </footer>
        </div>
    </div>

    @include('profile.change_password')
    @include('profile.edit_profile')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>


    <!-- Template JS File -->
    <script src="{{ asset('web/js/stisla.js') }}"></script>
    <script src="{{ asset('web/js/scripts.js') }}"></script>
    <script src="{{ mix('assets/js/profile.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
    @yield('page_js')
    @yield('scripts')

    <script>
        let loggedInUser = @json(\Illuminate\Support\Facades\Auth::user());
        let loginUrl = '{{ route('login') }}';
        // Loading button plugin (removed from BS4)
        (function($) {
            $.fn.button = function(action) {
                if (action === 'loading' && this.data('loading-text')) {
                    this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
                }
                if (action === 'reset' && this.data('original-text')) {
                    this.html(this.data('original-text')).prop('disabled', false);
                }
            };
        }(jQuery));
    </script>


    <!-- My Custom impot script -->

    @yield('data_tables_script')
    @yield('report_CSS_&_JS')

    {{-- <!-- Sweet Alert scripts -->
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/sweetalert/sweetalert2.all.js') }}"></script>
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/sweetalert/sweetalert2.all.min.js') }}"></script>
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/sweetalert/sweetalert2.js') }}"></script>
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/sweetalert/sweetalert2.min.js') }}"></script>
        <!-- Sweet Alert scripts -->

        <!-- data tables report scripts -->
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/datatables_report/datatables.js') }}"></script>
        <script type="text/javascript" charset="utf8" src="{{ asset('vendor/js/datatables_report/datatables.min.js') }}"></script>
        <!-- data tables report scripts -->

        <!-- data tables report style -->
        <link href="{{ asset('vendor/css/datatables_report/datatables.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('vendor/css/datatables_report/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- data tables report style --> --}}

    <!-- My Custom impot script -->



</body>

</html>
