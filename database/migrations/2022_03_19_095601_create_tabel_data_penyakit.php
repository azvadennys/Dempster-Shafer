<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataPenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_penyakit', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->string('kode_penyakit')->unique();
            $table->string('nama_penyakit');
            $table->longText('solusi');
            $table->timestamps();
        });

        $insertedData = [
            [
                'kode_penyakit' => 'P1',
                'nama_penyakit' => 'AVIAN INFLUENZA (AI)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'nama_penyakit' => 'NEWCASTLE DISEASE (ND)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'nama_penyakit' => 'CACAR UNGGAS (FOWL FOX)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P4',
                'nama_penyakit' => 'INFECTIOUS BRONCHITIS (IB)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P5',
                'nama_penyakit' => 'INFECTION LARYNGO TRACHEITIS (ILT)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P6',
                'nama_penyakit' => 'ENCEPHALOMYELITIS (AE)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P7',
                'nama_penyakit' => 'CHICKEN ANEMIA SYNDROME (CAS)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'nama_penyakit' => 'HELICOPTER DISEASE',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P9',
                'nama_penyakit' => 'INCLUSION BODY HEPATITIS (IBH)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P10',
                'nama_penyakit' => 'INFECTIOUS BURSAL DISEASE (IBD)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P11',
                'nama_penyakit' => 'LYMPHOID LEUKOSIS (LL)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'nama_penyakit' => 'MAREK’S DISEASES',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P13',
                'nama_penyakit' => 'SWOLLEN HEAD SYNDROME (SHS)',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P14',
                'nama_penyakit' => 'VIRAL ARTHITIS',
                'solusi' => json_encode([
                    '-',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];

        DB::table('tabel_data_penyakit')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_penyakit');
    }
}
