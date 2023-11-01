@extends('Frontend.layouts.main')

@section('content-wrapper')
    <h3 class="text-center my-5 text-custom">Halaman Pedoman</h3>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div class="container-fluid p-0 m-0 my-5">
                <div class="card kartu-custom">
                    <div class="card-header text-custom fw-bold text-white">
                        Tentang Aplikasi
                    </div>
                    <div class="card-body">
                        <p class="text-dark">
                            Penyakit Viral adalah penyakit yang disebabkan oleh virus. Penyakit ini adalah oenyakit yang
                            paling mudah menyebar dan sulit dalam pengendaliannya. Dalam sistem ini terdapat 14 jenis
                            penyakit viral yang dapat menyerang ayam jenis pejantan
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="container-fluid p-0 m-0 my-5">
                <div class="card kartu-custom">
                    <div class="card-header text-custom fw-bold text-white">
                        Cara Pemakaian Aplikasi
                    </div>
                    <div class="card-body">
                        <ol class="text-custom">
                            <li>Login terlebih dahulu, jika belum punya akun silahkan <a
                                    href="{{ route('registrasi') }}">registrasi</a> </li>
                            <li>Masuk ke halaman diagnosa</li>
                            <li>Pilih gejala yang dialami</li>
                            <li>Lalu, pilih proses data untuk melihat hasil</li>
                            <li>Riwayat Diagnosis agar dapat anda lihat hasil daignosis terdahulu
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="container-fluid p-0 m-0 my-5">
                <div class="card kartu-custom">
                    <div class="card-header text-custom fw-bold text-white">
                       Daftar Penyakit
                    </div>
                    <div class="card-body">
                        <ol class="text-custom">
                            @foreach ($penyakit as $index)
                            <li>{{ $index->nama_penyakit }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    </div>
@endsection
