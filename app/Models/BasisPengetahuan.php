<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasisPengetahuan extends Model
{
    protected $table = 'tabel_basis_pengetahuan';
    protected $primaryKey = 'id_basis_pengetahuan';

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode_gejala');
    }
}
