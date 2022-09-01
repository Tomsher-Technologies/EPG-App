<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Raffles - Dashboard</title>
    <meta name="robots" content="noindex" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
        rel="stylesheet" />
    <!-- Preloader -->
    <link type="text/css" href="{{ getAdminAsset('vendor/spinkit.css') }}" rel="stylesheet" />
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ getAdminAsset('vendor/perfect-scrollbar.css') }}" rel="stylesheet" />
    <!-- Material Design Icons -->
    <link type="text/css" href="{{ getAdminAsset('css/material-icons.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ getAdminAsset('css/fontawesome.css') }}" rel="stylesheet" />

    <!-- App CSS -->
    <link type="text/css" href="{{ getAdminAsset('css/app.css') }}" rel="stylesheet" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ getAdminAsset('css/sweetalert.css') }}" />

    @stack('header')

    <script src="{{ getAdminAsset('vendor/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="layout-compact layout-compact">
    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
           
            <div class="mdk-drawer-layout__content page-content">

                @include('admin.parts.header')
               
                @yield('content')

                @include('admin.parts.footer')

            </div> 

            @include('admin.parts.sidebar')
        </div>

        <script src="{{ getAdminAsset('vendor/popper.min.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/bootstrap.min.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/dom-factory.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/material-design-kit.js') }}"></script>
        <script src="{{ getAdminAsset('js/app.js') }}"></script>
        <script src="{{ getAdminAsset('js/settings.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/moment.min.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/moment-range.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ getAdminAsset('js/flatpickr.js') }}"></script> --}}
        {{-- <script src="{{ getAdminAsset('vendor/sweetalert.min.js') }}"></script> --}}
        {{-- <script src="{{ getAdminAsset('js/sweetalert.js') }}"></script> --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ getAdminAsset('js/hljs.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/Chart.min.js') }}"></script>
        <script src="{{ getAdminAsset('js/chartjs.js') }}"></script>
        <script src="{{ getAdminAsset('js/page.crm-dashboard.js') }}"></script>
        <script src="{{ getAdminAsset('vendor/list.min.js') }}"></script>
        <script src="{{ getAdminAsset('js/list.js') }}"></script>
        <script src="{{ getAdminAsset('js/toggle-check-all.js') }}"></script>
        <script src="{{ getAdminAsset('js/check-selected-row.js') }}"></script>
        <script src="{{ getAdminAsset('js/sidebar-mini.js') }}"></script>
        <script>
            (function() {
                "use strict";
                // ENABLE sidebar menu tabs
                $('.js-sidebar-mini-tabs [data-toggle="tab"]').on(
                    "click",
                    function(e) {
                        e.preventDefault();
                        $(this).tab("show");
                    }
                );
                $(".js-sidebar-mini-tabs").on("show.bs.tab", function(e) {
                    $(".js-sidebar-mini-tabs > .active").removeClass("active");
                    $(e.target).parent().addClass("active");
                });
            })();
        </script>

        {{-- Logout Form Start --}}
        <form action="{{ route('logout') }}" method="post" id="logoutForm">
            @csrf
        </form>
        {{-- Logout Form End --}}

        @stack('footer')
</body>

</html>
