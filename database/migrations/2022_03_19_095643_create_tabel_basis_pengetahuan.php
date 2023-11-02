<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelBasisPengetahuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_basis_pengetahuan', function (Blueprint $table) {
            $table->id('id_basis_pengetahuan');
            $table->string('kode_penyakit');
            $table->foreign('kode_penyakit')->references('kode_penyakit')->on('tabel_data_penyakit')->onDelete('cascade')->cascadeOnUpdate();
            $table->string('kode_gejala');
            $table->foreign('kode_gejala')->references('kode_gejala')->on('tabel_data_gejala')->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });

        $insertedData = [
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P14',
                'kode_gejala' => 'G5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P11',
                'kode_gejala' => 'G13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P6',
                'kode_gejala' => 'G14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P7',
                'kode_gejala' => 'G17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P14',
                'kode_gejala' => 'G17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G19',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P7',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P13',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P14',
                'kode_gejala' => 'G20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P7',
                'kode_gejala' => 'G21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G23',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'kode_gejala' => 'G27',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P1',
                'kode_gejala' => 'G28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P9',
                'kode_gejala' => 'G28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G29',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P4',
                'kode_gejala' => 'G31',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P9',
                'kode_gejala' => 'G32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P13',
                'kode_gejala' => 'G32',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P9',
                'kode_gejala' => 'G33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P11',
                'kode_gejala' => 'G33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G33',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G34',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P10',
                'kode_gejala' => 'G35',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G36',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G37',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P5',
                'kode_gejala' => 'G38',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P11',
                'kode_gejala' => 'G39',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P11',
                'kode_gejala' => 'G40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'kode_gejala' => 'G41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P11',
                'kode_gejala' => 'G41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G41',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G42',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G43',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G44',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G45',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G46',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'kode_gejala' => 'G47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G47',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G48',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G49',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'kode_gejala' => 'G50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P13',
                'kode_gejala' => 'G51',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P13',
                'kode_gejala' => 'G52',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P14',
                'kode_gejala' => 'G53',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P14',
                'kode_gejala' => 'G54',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];

        DB::table('tabel_basis_pengetahuan')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_basis_pengetahuan');
    }
}
