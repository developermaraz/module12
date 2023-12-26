<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiki @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap') }}"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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

<body>
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
    @include('FComponent.topbar')
    @include('FComponent.navbar')
        @yield('FrontEndContent')
    @include('FComponent.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
