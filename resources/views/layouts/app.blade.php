<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>
        Sistem Pakar{{ isset($titlePage) ? ' | ' . $titlePage : '' }}
    </title>
    <!--     Fonts and icons     -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> --}}
    <!-- Nucleo Icons -->
    {{-- <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" /> --}}
    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    {{-- <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" /> --}}
    <!-- CSS Files -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- <script src="{{ asset('assets') }}/js/plugins/sweetalert2.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{ asset('DataTables') }}/datatables.min.css" rel="stylesheet" />
    {{-- <link href="{{ asset('css') }}/mdb.min.css" rel="stylesheet" /> --}}
    <script src="{{ asset('DataTables') }}/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-datetimepicker') }}/css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('bootstrap-datetimepicker') }}/js/bootstrap-datetimepicker.min.js"></script> --}}
    {{-- <link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.css?v=2.1.2" rel="stylesheet" /> --}}
    <link href="{{ asset('assets') }}/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="{{ URL::to('bin/css/style-admin.css') }}" rel="stylesheet">
</head>

<body class="{{ $class ?? '' }}">

    <div class="wrapper ">
        @guest
            @yield('content-wrapper')
        @endguest

        @auth
            {{-- <div class="position-absolute w-100 min-height-300 top-0"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                <span class="mask bg-primary opacity-6"></span>
            </div> --}}
            @include('layouts.navbars.auth.sidenav')

            <div class="main-panel">
                @include('layouts.navbars.auth.topnav', ['title' => $title ?? ''])
                {{-- <div class="content"> --}}
                    @yield('content-wrapper')
                {{-- </div> --}}

                @include('layouts.footers.auth.footer')
            </div>
            {{-- @include('components.fixed-plugin') --}}
        @endauth

        <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('assets') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('assets') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('assets') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('assets') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('assets') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('assets') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('assets') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('assets') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('assets') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('assets') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('assets') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('assets') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('assets') }}/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
        <!-- Chartist JS -->
        <script src="{{ asset('assets') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets') }}/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>

        <!--   Core JS Files   -->
        {{-- <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/smooth-scrollbar.min.js"></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/core/mdb.min.js') }}"></script> --}}
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        {{-- <script src="{{ asset('assets') }}/js/argon-dashboard.js"></script> --}}
        @if (session()->has('success'))
            <script>
                Swal.fire(
                    'Berhasil!',
                    '{{ session()->get('success') }}',
                    'success'
                )
            </script>
        @endif

    </div>
</body>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#responsive-table').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>
@stack('custome_js')
<script src="{{ URL::to('bin/js/datapenyakit.js') }}"></script>

</html>
