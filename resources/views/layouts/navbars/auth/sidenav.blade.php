<div class="sidebar" data-color="purple" data-background-color="white">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo text-center">
        <a href="{{ route('login') }}">
            <h3>SISTEM PAKAR</h3>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <!-- Sidebar - Brand -->


            <li class="nav-item {{ $navLink == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Nav Item - Data Penyakit -->
            <li class="nav-item {{ $navLink == 'data-penyakit' ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('/data-penyakit') }}">
                    <i class="fas fa-virus"></i>
                    <p>Data Penyakit</p>
                </a>
            </li>

            <!-- Nav Item - Data Gejala -->
            <li class="nav-item {{ $navLink == 'data-gejala' ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('/data-gejala') }}">
                    <i class="fas fa-notes-medical"></i>
                    <p>Data Gejala</p>
                </a>
            </li>

            <!-- Nav Item - Data Basis Pengetahuan -->
            <li class="nav-item {{ $navLink == 'data-basis-pengetahuan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('/data-basis-pengetahuan') }}">
                    <i class="fas fa-laptop-medical"></i>
                    <p>Data Basis Pengetahuan</p>
                </a>
            </li>

            <!-- Nav Item - Data Riwayat -->
            <li class="nav-item {{ $navLink == 'data-riwayat' ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('/data-riwayat') }}">
                    <i class="fas fa-history"></i>
                    <p>Data Riwayat</p>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item mx-md-5 text-white">
                <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link bg-danger">
                        <i class="material-icons text-white">logout</i>
                        <p class="d-sm-inline text-white">Log out</p>
                    </a>
                </form>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            {{-- <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}  ">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('kendaraan/*') || Request::is('kendaraan') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('kendaraan') }}">
                    <i class="material-icons">airport_shuttle</i>
                    <p>Data Kendaraan</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('kecelakaan/*') || Request::is('kecelakaan') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('kecelakaan') }}">
                    <i class="material-icons">storage</i>
                    <p>Data Kecelakaan</p>
                </a>
            </li>
            <li
                class="nav-item {{ Request::is('penolakan-santunan/*') || Request::is('penolakan-santunan') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('penolakanSantunan') }}">
                    <i class="material-icons">cancel</i>
                    <p>Penolakan Santunan</p>
                </a>
            </li>
            <li
                class="nav-item {{ Request::is('laporan-rekapitulasi/*') || Request::is('laporan-rekapitulasi') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('laporan') }}">
                    <i class="material-icons">description</i>
                    <p>Rekapitulasi Pembayaran</p>
                </a>
            </li>
            <li
                class="nav-item {{ Request::is('laporan-kecelakaan/*') || Request::is('laporan-kecelakaan') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('laporan.kecelakaan') }}">
                    <i class="material-icons">show_chart</i>
                    <p>Laporan Tingkat Kecelakaan</p>
                </a>
            </li> --}}
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
