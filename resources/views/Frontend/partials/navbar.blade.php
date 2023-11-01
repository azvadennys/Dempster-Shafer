<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ URL::to('/') }}">SP Dempster Shafer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $navLink == 'home' ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $navLink == 'diagnosa' ? 'active' : '' }}"
                        href="{{ URL::to('diagnosa') }}">Diagnosa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $navLink == 'pedoman' ? 'active' : '' }}"
                        href="{{ URL::to('pedoman') }}">Pedoman</a>
                </li>

                @auth
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link {{ $navLink == 'Dashboard' ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ $navLink == 'data-riwayat' ? 'active' : '' }}"
                                href="{{ route('data.riwayat') }}">Riwayat Diagnosis</a>
                        </li>
                    @endif
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </li>
                @endauth



            </ul>
        </div>
    </div>
</nav>
