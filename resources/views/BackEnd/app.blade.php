<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiki @yield('title')</title>

    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- Ionicons --}}
    <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    {{-- Tempusdominus Bootstrap 4 --}}
    <link rel="stylesheet"
        href="{{ asset('BackEnd/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    {{-- iCheck --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    {{-- JQVMap --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/jqvmap/jqvmap.min.css') }}">
    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/dist/css/adminlte.min.css') }}">
    {{-- overlayScrollbars --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- Daterange picker --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/daterangepicker/daterangepicker.css') }}">
    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('BackEnd/plugins/summernote/summernote-bs4.min.css') }}">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <script>
        function sideAlertMessage(type, mess) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: type,
                title: mess
            });
        }
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>sideAlertMessage('error', "{{ ucwords($error) }}")</script>
        @endforeach
    @endif
    @if(session('error'))
        <script>sideAlertMessage('error', "{{ ucwords(session('error')) }}")</script>
    @endif
    @if(session('success'))
        <script>sideAlertMessage('success', "{{ ucwords(session('success')) }}")</script>
    @endif
    <div class="wrapper">
        {{-- Preloader --}}
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('BackEnd/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>
        @include('BComponents.navbar')
        @include('BComponents.sidebar')
        @include('BComponents.contentHeader')
        @yield('BackEndContent')
        @include('BComponents.footer')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    {{-- jQuery --}}
    <script src="{{ asset('BackEnd/plugins/jquery/jquery.min.js') }}"></script>
    {{-- jQuery UI 1.11.4 --}}
    <script src="{{ asset('BackEnd/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    {{-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --}}
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    {{-- Bootstrap 4 --}}
    <script src="{{ asset('BackEnd/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- ChartJS --}}
    <script src="{{ asset('BackEnd/plugins/chart.js/Chart.min.js') }}"></script>
    {{-- Sparkline --}}
    <script src="{{ asset('BackEnd/plugins/sparklines/sparkline.js') }}"></script>
    {{-- JQVMap --}}
    <script src="{{ asset('BackEnd/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('BackEnd/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    {{-- jQuery Knob Chart --}}
    <script src="{{ asset('BackEnd/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    {{-- daterangepicker --}}
    <script src="{{ asset('BackEnd/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('BackEnd/plugins/daterangepicker/daterangepicker.js') }}"></script>
    {{-- Tempusdominus Bootstrap 4 --}}
    <script src="{{ asset('BackEnd/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    {{-- Summernote --}}
    <script src="{{ asset('BackEnd/plugins/summernote/summernote-bs4.min.js') }}"></script>
    {{-- overlayScrollbars --}}
    <script src="{{ asset('BackEnd/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    {{-- AdminLTE App --}}
    <script src="{{ asset('BackEnd/dist/js/adminlte.js') }}"></script>
    {{-- AdminLTE dashboard demo (This is only for demo purposes) --}}
    <script src="{{ asset('BackEnd/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
