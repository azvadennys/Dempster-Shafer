<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    protected $table = 'tabel_diagnosa';
    protected $primaryKey = 'id_diagnosa';
    protected $fillable = [
        'id_user',
        'diagnosa',
        'solusi'
    ];

    protected $with = ['user'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
