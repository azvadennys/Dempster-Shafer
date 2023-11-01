<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap 5 CSS --}}
    <link rel="stylesheet" href="{{ URL::to('vendor/bootstrap5/css/bootstrap.min.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Custom Style --}}
    <link rel=" stylesheet" href="{{ URL::to('bin/css/style.css') }}">

    <title>Sistem Pakar{{ isset($titlePage) ? ' || ' . $titlePage : '' }}</title>
</head>

<body>
    <div class="card kartu-100">
        <div class="card-header p-0">
            @include('Frontend.partials.navbar')
        </div>
        <div class="card-body p-0">
            <div class="container">
                @yield('content-wrapper')
            </div>
        </div>
        <div class="card-footer">
            @include('Frontend.partials.footer')
        </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Tombol Logout untuk keluar dari sistem.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ URL::to('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to('vendor/sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('vendor/sbadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- Bootstrap 5 JS --}}
    <script src="{{ URL::to('vendor/bootstrap5/js/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::to('vendor/sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::to('vendor/sbadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::to('vendor/sbadmin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::to('vendor/sbadmin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::to('vendor/sbadmin/js/demo/chart-pie-demo.js') }}"></script>

    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>
