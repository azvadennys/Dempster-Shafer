<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Gejala',
            'navLink' => 'data-gejala',
            'dataGejala' => Gejala::all()
        ];

        return view('Backend.pages.data-gejala.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [
            "KONDISI BADAN", "KONDISI BULU", "KONDISI FESES", "KONDISI FISIK", "KONDISI KAKI", "KONDISI KEPALA", "KONDISI LEHER", "KONDISI MATA DAN HIDUNG", "LAINNYA"
        ];
        $datas = [
            'titlePage' => 'Data Gejala',
            'navLink' => 'data-gejala',
            'kategori' => $categories
        ];

        return view('Backend.pages.data-gejala.create', $datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Gejala $gejala, Request $request)
    {
        // dd($request);

        $request->validate([
            'kode_gejala' => 'required|unique:tabel_data_gejala',
            'gejala' => 'required',
            'kategori' => 'required',
            'nilai_densitas' => 'required'
        ]);

        if ($request->jenis_media == 'youtube') {
            $request->validate([
                'youtube' => 'required'
            ]);
            $insertedData = [
                'kode_gejala' => $request->kode_gejala,
                'gejala' => $request->gejala,
                'nilai_densitas' => $request->nilai_densitas,
                'kategori' => $request->kategori,
                'media' => 'https://www.youtube.com/embed/' . $request->youtube,
                'created_at' => Carbon::now(),
            ];
        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif'
            ]);
            $file = $request->file('gambar');
            // dd($file);
            $namaFileBaru = $request->kode_gejala . '.' . $file->getClientOriginalExtension();
            $uploadDir = 'gejala/';
            $uploadPath = $uploadDir . $namaFileBaru;

            if (file_exists($uploadPath)) {
                unlink($uploadPath); // Menghapus file duplikat
            }


            move_uploaded_file($file, $uploadPath);

            $insertedData = [
                'kode_gejala' => $request->kode_gejala,
                'gejala' => $request->gejala,
                'nilai_densitas' => $request->nilai_densitas,
                'media' => $namaFileBaru,
                'kategori' => $request->kategori,
                'created_at' => Carbon::now(),
            ];
        }



        DB::table('tabel_data_gejala')->insert($insertedData);

        return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($data_gejala, Gejala $gejala)
    {
        $dataGejala = $gejala->find($data_gejala)->toArray();
        $categories = [
            "KONDISI BADAN", "KONDISI BULU", "KONDISI FESES", "KONDISI FISIK", "KONDISI KAKI", "KONDISI KEPALA", "KONDISI LEHER", "KONDISI MATA DAN HIDUNG", "LAINNYA"
        ];
        $datas = [
            'titlePage' => 'Data Gejala',
            'navLink' => 'data-gejala',
            'idGejala' => $dataGejala['id_gejala'],
            'dataGejala' => $dataGejala,
            'kategori' => $categories
        ];

        return view('Backend.pages.data-gejala.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update($data_gejala, Request $request, Gejala $gejala)
    {
        $dataGejala = $gejala->find($data_gejala);
        // dd($dataGejala);
        if ($dataGejala->kode_gejala != $request->kode_gejala) {
            $validateReq = $request->validate([
                'kode_gejala' => 'required|unique:tabel_data_gejala',
                'gejala' => 'required',
                'nilai_densitas' => 'required',
                'kategori' => 'required'
            ]);
        } else {
            $validateReq = $request->validate([
                'gejala' => 'required',
                'nilai_densitas' => 'required',
                'kategori' => 'required'
            ]);
        }

        $dataGejala->kode_gejala = $request->kode_gejala;
        $dataGejala->gejala = $request->gejala;
        $dataGejala->nilai_densitas = $request->nilai_densitas;
        $dataGejala->kategori = $request->kategori;
        $dataGejala->save();

        return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_gejala, Gejala $gejala)
    {
        $dataGejala = $gejala->find($data_gejala);
        $dataGejala->delete();

        return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil dihapus');
    }
}
