<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PedomanController extends Controller
{
    public function index()
    {

        $datas = [
            'titlePage' => 'Pedoman',
            'navLink' => 'pedoman',
            'penyakit' => Penyakit::orderby('nama_penyakit', 'asc')->get()
        ];

        return view('Frontend.pages.pedoman', $datas);
    }
}
