@extends('Frontend.layouts.main')

@section('content-wrapper')
    <div class="container-fluid p-0 m-0 my-5">
        <h3 class="text-center mb-5 text-custom">Halaman Diagnosis</h3>
        @guest
            <div class="row justify-content-center">
                <div class="col-sm-6 my-lg-5 px-lg-5 ">
                    <div class="card mx-lg-5 login-session">
                        @guest
                            <div class="card-body">
                                <h4 class="card-title text-center text-custom mb-4">Login</h4>
                                <h6 class="card-title text-center text-warning mb-4">Anda harus login untuk diagnosis!</h6>
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
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="{{ URL::to('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label text-custom">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email">
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
                                        <a href="{{ route('registrasi') }}" class="mx-4">Belum Punya Akun ?</a>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-custom-2 fw-bold"><i
                                                class="fa-solid fa-right-to-bracket me-1"></i>
                                            Login</button>
                                    </div>
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        @endguest
        @auth

            <div class="card kartu-custom" id="konsultasi_form">
                <div class="card-header text-white fw-bold">
                    Konsultasi Gejala
                </div>
                @php
                    $isFirstProduct = true;
                @endphp

                <div class="card-body">
                    <form id="diagnosaForm" action="{{ URL::to('diagnosa') }}" method="post">
                        @csrf
                        {{-- <div class="mb-3 row">
                        <label for="nama_pemilik" class="col-sm-2 col-form-label text-custom">Nama Pemilik</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror"
                                id="nama_pemilik" name="nama_pemilik" value="{{ old('nama_pemilik') }}">
                            @error('nama_pemilik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}
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
                            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center"
                                role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                    aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    {{ session('error') }}
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- <div class="container mb-3"> --}}
                        {{-- <div class="card kartu-custom"> --}}
                        {{-- <div class="card-header text-white fw-bold">
                                <h5 class="card-title">Pilih Gejala</h5>
                            </div> --}}
                        <div class="row justify-content-center">
                            <div id="InfoInput1" style="display: block">
                                <div class="alert alert-info  fade show d-flex align-items-center" role="alert">

                                    <div class="text-center">
                                        Pilihlah gejala dibawah ini yang sesuai dengan kondisi saat ini.
                                    </div>
                                </div>
                            </div>
                            <div id="InfoInput2" style="display: none">
                                <div class="alert alert-info  fade show d-flex align-items-center" role="alert">

                                    <div class="text-center">
                                        Apakah masih ada gejala yang sesuai? Jika tidak ada yang
                                        sesuai silahkan langsung klik tombol proses data.
                                    </div>
                                </div>
                            </div>
                            <div id="errorInput" style="display: none">
                                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center"
                                    role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div class="text-center">
                                        Diagnosis anda tidak dapat diproses, Minimal masukan 2 gejala
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                            @foreach ($index as $gejala)
                                <div class="col-sm-12 col-md-6 col-lg-4 "id="{{ $gejala['kode_gejala'] }}"
                                    style="display: none">
                                    <div class="card-body px-4">
                                        <div style="overflow: hidden" height="175">
                                            @if (strpos($gejala['media'], $gejala['kode_gejala']) !== false)
                                                <img src="{{ asset('gejala/' . $gejala['media']) }}"
                                                    class="rounded border border-dark" alt="Image" height="175">
                                            @else
                                                <iframe height="175" src="{{ $gejala['media'] }}"
                                                    class="rounded border border-dark" frameborder="1"
                                                    allowfullscreen></iframe>
                                            @endif
                                        </div>
                                        <input type="checkbox" class="form-check-input" name="resultGejala[]"
                                            id="checkbox{{ $gejala['kode_gejala'] }}" value="{{ $gejala['kode_gejala'] }}"
                                            @if (is_array(old('resultGejala')) && in_array($gejala['kode_gejala'], old('resultGejala'))) checked @endif>
                                        <label for="checkbox{{ $gejala['kode_gejala'] }}" class="text-dark">
                                            <bold>{{ $gejala['kode_gejala'] }}</bold> -
                                            {{ $gejala['gejala'] }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-center my-4">
                    <button class="btn btn-custom-2 fw-bold" id="prosesDataBtn" type="button"><i
                            class="fa-solid fa-floppy-disk me-1"></i>
                        Proses Data
                    </button>
                    <a href="{{ route('diagnosa') }}" class="btn btn-secondary fw-bold"><i
                            class="fa-solid fa-ban me-1"></i>Cancel</a>

                </div>
                </form>
            </div>
            <div class="card-footer"></div>
        </div>
    @endauth
    </div>
@endsection

@push('custome_js')
    <script>
        $(document).ready(function() {

            var errorInput = document.getElementById('errorInput');
            var infoInput1 = document.getElementById('InfoInput1');
            var infoInput2 = document.getElementById('InfoInput2');

            var dataLamaInput = [];
            var dataLamaTampil = [];
            @foreach ($GejalaUmum as $gejala)
                var gejalaId = "{{ $gejala['kode_gejala'] }}";
                dataLamaTampil.push(gejalaId);
                var gejalaUmum = document.getElementById(gejalaId);
                if (gejalaUmum) {
                    gejalaUmum.style.display = 'block';
                }
            @endforeach

            $('#prosesDataBtn').click(function() {
                console.log(dataLamaTampil);
                var data = [];
                $('#diagnosaForm input[type=checkbox]:checked').each(function() {
                    data.push($(this).val());
                    if (dataLamaInput.indexOf($(this).val()) === -1) {
                        // Jika tidak ada, maka menambahkan nilai tersebut ke dalam array dataLama
                        dataLamaInput.push($(this).val());
                    }
                });

                infoInput1.style.display = 'none';
                if (data.length != 0) {

                    $.ajax({
                        url: '{{ route('cekDataBerikutnya') }}', // Sesuaikan dengan endpoint yang diinginkan
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            resultGejala: data
                        },
                        success: function(response) {
                            if (response.success) {
                                console.log(response.message); // Shows success message
                                console.log(response.data);
                                console.log(dataLamaInput);
                                sembunyiData(dataLamaTampil);
                                tampilData(response.data);
                                // Shows the data returned from the server
                                // You can update the UI based on the response here
                            }
                        },
                        error: function(xhr, status, error) {
                            // Lakukan penanganan error
                        }
                    });

                    infoInput2.style.display = 'block';
                } else {
                    sembunyiData(dataLamaTampil);
                    errorInput.style.display = 'block';
                    infoInput1.style.display = 'none';
                    infoInput2.style.display = 'none';
                }
            });

            function tampilData(data) {
                var tampil = 0;
                data.forEach(function(item) {
                    var gejalaId = item.kode_gejala;
                    var gejalaUmum = document.getElementById(gejalaId);

                    // Cek apakah gejalaId sudah ada dalam dataLamaTampil
                    var isGejalaIdExist = dataLamaTampil.includes(gejalaId);

                    if (gejalaUmum) {
                        // Jika gejalaId tidak ada dalam dataLamaTampil, tampilkan elemen
                        if (!isGejalaIdExist) {
                            gejalaUmum.style.display = 'block';
                            // Tambahkan gejalaId ke dataLamaTampil
                            dataLamaTampil.push(gejalaId);
                            tampil += 1;
                        } else {
                            // Jika gejalaId sudah ada dalam dataLamaTampil, sembunyikan elemen
                            gejalaUmum.style.display = 'none';
                        }
                    }

                });
                if (tampil === 0) {
                    // direct web ke route diognosa dengan metode post dan mengirim data var dataLamaInput ke route tersebut
                    if (dataLamaInput.length >= 2) {

                        // Mengirimkan form
                        var form = document.getElementById('diagnosaForm');
                        if (form) {
                            form.submit();
                        }
                    } else {

                        // Mengubah atribut "style" untuk mengatur display menjadi "none"
                        if (errorInput) {
                            errorInput.style.display = 'block';
                            infoInput1.style.display = 'none';
                            infoInput2.style.display = 'none';
                        }
                    }

                    tampil = 1;


                }

            }

            function sembunyiData(data) {
                data.forEach(function(item) {
                    console.log(item);
                    var gejalaId = item;
                    var gejalaUmum = document.getElementById(gejalaId);
                    gejalaUmum.style.display = 'none';

                });
            }
        });
    </script>
@endpush
