<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>कुखुरा बिकास फार्म</title>


    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link href="{{ asset('assets/vendors/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/barchart.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    @livewireStyles
</head>

<body class="fixed-navbar">
    @include('sweetalert::alert')
    <div class="page-wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('main-container')
        @include('admin.layouts.footer')
    </div>

    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/summernote/dist/summernote.min.js') }}" type="text/javascript"></script>




    @stack('script')
    @livewireScripts
    @stack('script')

</body>

</html>
