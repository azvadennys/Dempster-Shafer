@extends('layouts.app')

@section('content-wrapper')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-custom-2-800">
                <i class="fas fa-notes-medical mr-1"></i>
                {{ $titlePage }}
            </h1>
        </div>

        <!-- Content Row -->
        <div class="card kartu-custom mb-5">
            <div class="card-header">
                <p class="m-0 p-0 text-white"><b>Tambah Data Gejala</b></p>
            </div>
            <div class="card-body">
                <form action="{{ URL::to('data-gejala') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="kode_gejala" class="col-sm-2 col-form-label text-custom">Kode Gejala</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control @error('kode_gejala') is-invalid @enderror"
                                id="kode_gejala" name="kode_gejala" value="{{ old('kode_gejala') }}">
                            @error('kode_gejala')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gejala" class="col-sm-2 col-form-label text-custom">Nama Gejala</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control @error('gejala') is-invalid @enderror" id="gejala"
                                name="gejala" value="{{ old('gejala') }}">
                            @error('gejala')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nilai_densitas" class="col-sm-2 col-form-label text-custom">Nilai Densitas</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control @error('nilai_densitas') is-invalid @enderror"
                                id="nilai_densitas" name="nilai_densitas" value="{{ old('nilai_densitas') }}"
                                step="0.01">
                            @error('nilai_densitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label text-custom">Kategori</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="" selected disabled>Pilih Kategori</option>
                                @foreach ($kategori as $index)
                                    <option value="{{ $index }}" {{ old('kategori') == $index ? 'selected' : '' }}>
                                        {{ $index }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis_media" class="col-sm-2 col-form-label text-custom">Jenis Media</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="jenis_media" name="jenis_media" id="jenis_media">
                                <option selected disabled>Pilih Jenis Media</option>
                                <option value="gambar">Gambar</option>
                                <option value="youtube">Video Youtube</option>
                            </select>
                        </div>
                    </div>
                    <div id="input_gambar" style="display: none">
                        <div class="mb-3 row">
                            <label for="gambar" class="col-sm-2 col-form-label text-custom">Gambar Gejala</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                    id="gambar" name="gambar">

                                @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div id="input_youtube" style="display: none">
                        <div class="mb-3 row">
                            <label for="youtube" class="col-sm-2 col-form-label text-custom">Link Youtube</label>
                            <div class="col-sm-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://www.youtube.com/embed/</span>

                                    <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                        id="youtube" name="youtube" value="{{ old('youtube') }}"
                                        aria-describedby="basic-addon3">
                                </div>
                                <div class="text-dark">jika URL video adalah https://www.youtube.com/watch?v=VIDEO_ID, maka
                                    "VIDEO_ID" adalah bagian yang perlu Anda masukkan</div>
                                @error('youtube')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <script>
                        const jenisMediaSelect = document.getElementById('jenis_media');
                        const inputGambar = document.getElementById('input_gambar');
                        const inputYoutube = document.getElementById('input_youtube');

                        jenisMediaSelect.addEventListener('change', function() {
                            const selectedOption = jenisMediaSelect.value;

                            if (selectedOption === 'gambar') {
                                inputGambar.style.display = 'block';
                                inputYoutube.style.display = 'none';
                            } else if (selectedOption === 'youtube') {
                                inputGambar.style.display = 'none';
                                inputYoutube.style.display = 'block';
                            } else {
                                inputGambar.style.display = 'none';
                                inputYoutube.style.display = 'none';
                            }
                        });
                    </script>
                    <div class="mb-3 row">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-custom-2 me-md-2" type="submit">
                                <i class="fas fa-save me-1"></i>
                                Simpan Data
                            </button>
                            <button class="btn btn-warning" type="reset">
                                <i class="fas fa-ban me-1"></i>
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
