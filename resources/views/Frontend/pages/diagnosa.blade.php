@extends('Frontend.layouts.main')

@section('content-wrapper')
    <div class="container-fluid p-0 m-0 my-5">
        <h3 class="text-center mb-5 text-custom">Halaman Diagnosa</h3>
        @guest
            <div class="row justify-content-center">
                <div class="col-sm-6 my-lg-5 px-lg-5 ">
                    <div class="card mx-lg-5 login-session">
                        @guest
                            <div class="card-body">
                                <h4 class="card-title text-center text-custom mb-4">Login</h4>
                                <h6 class="card-title text-center text-warning mb-4">Anda harus login untuk diagnosa!</h6>
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
            <div class="card kartu-custom" id="pretest">
                <div class="card-header text-white fw-bold">
                    4 Pertanyaan Awal
                </div>
                <div class="card-body">

                    <div class="alert alert-info   text-center" role="alert">
                        <div>
                            Centang Jawaban yang benar dari pertanyaan berikut sesuai dengan kondisi saat ini !
                        </div>
                    </div>
                    {{-- @endif --}}
                    <div id="syarat" style="display : none;">
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
                        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                Maaf anda tidak bisa melanjutkan diagnosis dikarenakan kondisi hewan anda tidak memenuhi
                                persyaratan untuk diagnosis
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <table class="table table-bordered custom-table" style="width: 90%">
                            <colgroup>
                                <col span="1" style="width: 5%;">
                                <col span="1" style="width: 80%;">
                                <col span="1" style="width: 5%;">
                            </colgroup>
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Pertanyaann</th>
                                    <th>Ya</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="">Apakah ternak mengalami penurunan produksi secara tiba- tiba,
                                        seperti penurunan pertambahan bobot pada hewan ternak?
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" class="form-check-input"
                                            id="pertanyaan1"name="resultPertanyaan[]" value="1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="">Apakah banyak ternak yang sakit dengan gejala serupa?</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="form-check-input"
                                            id="pertanyaan2"name="resultPertanyaan[]" value="2">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="">Apakah ternak menunjukkan gejala klinis yang serupa, seperti demam,
                                        gangguan pernapasan, pencernaan, penurunan nafsu makan, atau gejala lain?</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="form-check-input"id="pertanyaan3"
                                            name="resultPertanyaan[]" value="3">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="">Apakah ada kasus kematian yang tidak wajar diantara ternak?</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="form-check-input"id="pertanyaan4"
                                            name="resultPertanyaan[]" value="4">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                        <button class="btn btn-custom-2 fw-bold" id="proses_pretest"><i
                                class="fa-solid fa-floppy-disk me-1"></i>
                            Proses Data
                        </button>
                    </div>
                </div>
            </div>

            <div class="card kartu-custom" id="konsultasi_form" style="display : none;">
                <div class="card-header text-white fw-bold">
                    Konsultasi Gejala
                </div>
                @php
                    $isFirstProduct = true;
                @endphp
                
                <div class="card-body">
                    <form action="{{ URL::to('diagnosa') }}" method="post">
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- <div class="container mb-3"> --}}
                        {{-- <div class="card kartu-custom"> --}}
                        {{-- <div class="card-header text-white fw-bold">
                                <h5 class="card-title">Pilih Gejala</h5>
                            </div> --}}
                        <div class="row justify-content-center">
                            <div id="accordion">
                                @foreach ($gejala as $category => $index)
                                    <div class="card">
                                        <div class="card-header" id="heading-{{ preg_replace('/\s+/', '_', $category) }}"
                                            data-toggle="collapse" data-target="#collapse-{{ preg_replace('/\s+/', '_', $category) }}"
                                            aria-expanded="true" aria-controls="collapse-{{ preg_replace('/\s+/', '_', $category) }}">
                                            <h5 class="mb-0">
                                                <a class="btn btn-custom-2" data-toggle="collapse"
                                                    data-target="#collapse-{{ preg_replace('/\s+/', '_', $category) }}"
                                                    aria-expanded="true"
                                                    aria-controls="collapse-{{ preg_replace('/\s+/', '_', $category) }}">
                                                    {{ $category }}
                                            </a>
                                            </h5>
                                        </div>
            
                                        <div id="collapse-{{ preg_replace('/\s+/', '_', $category) }}"
                                            class="collapse  @if ($isFirstProduct) show
                                        @php
                                            $isFirstProduct = false;
                                        @endphp @endif"
                                            aria-labelledby="heading-{{ preg_replace('/\s+/', '_', $category) }}"
                                            data-parent="#accordion">
                                            <div class="card-body text-dark">
                                                <div class="row justify-content-center">
                                                    @foreach ($index as $gejala)
                                                        <div class="col-sm-12 col-md-6 col-lg-4 ">
                                                            <div class="card-body px-4">
                                                                <div id="content " style="overflow: hidden" height="175">
                                                                    @if (strpos($gejala['media'], $gejala['kode_gejala']) !== false)
                                                                        <img src="{{ asset('gejala/' . $gejala['media']) }}" class="rounded border border-dark" 
                                                                            alt="Image" height="175">
                                                                    @else
                                                                        <iframe height="175" src="{{ $gejala['media'] }}" class="rounded border border-dark"
                                                                            frameborder="1" allowfullscreen></iframe>
                                                                    @endif
                                                                </div>
                                                                <input type="checkbox" class="form-check-input" name="resultGejala[]"
                                                                    id="checkbox{{ $gejala['kode_gejala'] }}"
                                                                    value="{{ $gejala['kode_gejala'] }}"
                                                                    @if (is_array(old('resultGejala')) && in_array($gejala['kode_gejala'], old('resultGejala'))) checked @endif>
                                                                <label for="checkbox{{ $gejala['kode_gejala'] }}" class="text-dark">
                                                                    <bold>{{ $gejala['kode_gejala'] }}</bold> - {{ $gejala['gejala'] }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                              
                            </div>
                        </div>
                        {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- <table class="table table-bordered custom-table" style="width: 100%">
                        <colgroup>
                            <col span="1" style="width: 3%;">
                            <col span="1" style="width: 12%;">
                            <col span="1" style="width: 80%;">
                            <col span="1" style="width: 5%;">
                        </colgroup>
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Kode Gejala</th>
                                <th>Nama Gejala</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($dataGejala as $gejala)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">{{ $gejala['kode_gejala'] }}</td>
                                    <td>{{ $gejala['gejala'] }}</td>
                                    <td class="text-center">
                                        <input type="checkbox" class="form-check-input" name="resultGejala[]"
                                            value="{{ $gejala['kode_gejala'] }}"
                                            @if (is_array(old('resultGejala')) && in_array($gejala['kode_gejala'], old('resultGejala'))) checked @endif>
                                    </td>
                                </tr>

                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table> --}}
                        <div class="d-grid gap-2 d-md-flex justify-content-center mt-4">
                            <button class="btn btn-custom-2 fw-bold" type="submit"><i
                                    class="fa-solid fa-floppy-disk me-1"></i>
                                Proses Data
                            </button>
                            <button class="btn btn-secondary fw-bold" type="reset"><i class="fa-solid fa-ban me-1"></i>
                                Cancel
                            </button>
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
            var hiddenDiv = document.getElementById('konsultasi_form');
            var pretest = document.getElementById('pretest');
            var syarat = document.getElementById('syarat');

            var proses_pretest = document.getElementById('proses_pretest');
            @if (session()->has('error'))
                syarat.style.display = 'none';
                hiddenDiv.style.display = 'block';
                pretest.style.display = 'none';
            @endif
            proses_pretest.addEventListener('click', function() {
                var jumlah = 0;
                var pertanyaan1 = document.getElementById('pertanyaan1');
                var pertanyaan2 = document.getElementById('pertanyaan2');
                var pertanyaan3 = document.getElementById('pertanyaan3');
                var pertanyaan4 = document.getElementById('pertanyaan4');
                if (pertanyaan1.checked) {
                    jumlah++;
                }
                if (pertanyaan2.checked) {
                    jumlah++;
                }
                if (pertanyaan3.checked) {
                    jumlah++;
                }
                if (pertanyaan4.checked) {
                    jumlah++;
                }

                if (jumlah > 1) {
                    syarat.style.display = 'none';
                    hiddenDiv.style.display = 'block';
                    pretest.style.display = 'none';
                } else {
                    syarat.style.display = 'block';
                    hiddenDiv.style.display = 'none';
                    pretest.style.display = 'block';
                }
                console.log(jumlah);

            });
        });
    </script>
@endpush
