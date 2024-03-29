@extends('Frontend.layouts.main')

@section('content-wrapper')
    <div class="row my-lg-5 mb-3">
        <div class="col-sm-6 my-lg-5 my-5">
            <div class="my-lg-5">
                <h4 class="text-center text-dark">SISTEM PAKAR DIAGNOSIS PENYAKIT VIRAL PADA AYAM PEJANTAN</h4>
                <div class="text-center">
                    <img src="{{ asset('1704459372889-removebg-preview.png') }}" alt="" width="300"
                        class="img-fluid">
                </div>

            </div>
        </div>
        <div class="col-sm-6 my-lg-5 px-lg-5">
            <div class="card mx-lg-5 login-session">
                @guest
                    <div class="card-body">
                        <h4 class="card-title text-center text-custom mb-4">Login</h4>
                        @if (session()->has('error'))
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                </symbol>
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                            <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show"
                                role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                    aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ URL::to('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label text-custom">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password"
                                    class="form-label text-custom @error('password') is-invalid @enderror">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label text-custom" for="remember">Remember
                                    Me</label>

                            </div>
                            <div class="row justify-content-center mb-2">
                                <div class="col-6">
                                    <a href="{{ route('registrasi') }}" class="btn btn-link">Belum Punya Akun ?</a>
                                </div>
                                <div class="col-6">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-custom-2 fw-bold"><i
                                        class="fa-solid fa-right-to-bracket me-1"></i>
                                    Login</button>
                            </div>
                        </form>
                    </div>
                @endguest
                @auth
                    <div class="card-body">
                        <h4 class="card-title text-center text-custom mb-4">Anda Telah Login</h4>

                        <div class="d-grid gap-2">

                            <a class="btn btn-custom-2 fw-bold" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                        </div>
                        </form>
                    </div>
                    @endauth @auth
                    <a href="{{ URL::to('diagnosa') }}" class="btn btn-custom"><i class="fas fa-play-circle me-1"></i> Mulai
                        Konsultasi</a>
                @endauth
            </div>
        </div>
    </div>
@endsection
