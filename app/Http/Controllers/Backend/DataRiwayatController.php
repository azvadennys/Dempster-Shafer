<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BasisPengetahuan;
use App\Models\Diagnosa;
use App\Models\Hasil;
use Illuminate\Http\Request;

class DataRiwayatController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'admin') {
            $datas = [
                'titlePage' => 'Data Riwayat',
                'navLink' => 'data-riwayat',
                'dataDiagnosa' => Diagnosa::orderby('created_at', 'desc')->get()
            ];

            return view('Backend.pages.data-riwayat.index', $datas);
        } else {
            $datas = [
                'titlePage' => 'Data Riwayat',
                'navLink' => 'data-riwayat',
                'dataDiagnosa' => Diagnosa::where('id_user', auth()->user()->id)->orderby('created_at', 'desc')->get()
            ];
            // dd( $datas);
            return view('Frontend.pages.data-riwayat.index', $datas);
        }
    }

    public function showdata($id_diagnosa)
    {
        $dataDiagnosa = Diagnosa::find($id_diagnosa)->toArray();
        $diagnosa = json_decode($dataDiagnosa['diagnosa']);
        $kode_penyakit = strstr($diagnosa->nama_penyakit, ' -', true);
        $penyakit = BasisPengetahuan::with('gejala')->where('kode_penyakit', $kode_penyakit)->get();

        $dataTampilan = [
            'titlePage' => 'Hasil Diagnosa',
            'navLink' => 'diagnosa',
            'gejalaSebenarnya' => $penyakit,
            'namaPemilik' => $dataDiagnosa['user']['name'],
            'diagnosa' => json_decode($dataDiagnosa['diagnosa']),
            'solusi' => json_decode($dataDiagnosa['solusi'])
        ];

        if (auth()->user()->role == 'admin') {
            return view('Backend.pages.data-riwayat.hasil', $dataTampilan);
        } else {
            return view('Frontend.pages.data-riwayat.hasil', $dataTampilan);
        }
    }

    public function destroy($id_diagnosa)
    {
        $dataDiagnosa = Diagnosa::find($id_diagnosa);
        $dataDiagnosa->delete();

        return redirect()->to('data-riwayat')->with('success', 'Data Riwayat Berhasil Dihapus');
    }
}
