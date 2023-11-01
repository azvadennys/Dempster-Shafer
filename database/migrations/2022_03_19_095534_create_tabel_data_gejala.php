<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTabelDataGejala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_gejala', function (Blueprint $table) {
            $table->id('id_gejala');
            $table->string('kode_gejala')->unique();
            $table->string('gejala');
            $table->string('media');
            $table->double('nilai_densitas');
            $table->timestamps();
        });

        $insertedData =
            [
                [
                    'kode_gejala' => 'G1',
                    'gejala' => 'Tampak sayu/lesu',
                    'nilai_densitas' => 0.5,
                    'media' => 'G1.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G2',
                    'gejala' => 'Ataksia (gangguan gerak tubuh)',
                    'nilai_densitas' => 0.92,
                    'media' => 'https://www.youtube.com/embed/PbOr8BXy1d0?si=P9e72AxwHlDOO4pW',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G3',
                    'gejala' => 'Jatuh kesamping dengan kaki terjulur',
                    'nilai_densitas' => 0.85,
                    'media' => 'https://www.youtube.com/embed/0_2qPi6gge0?si=PF9jpcouEyCOtf11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G4',
                    'gejala' => 'Tremor kepala dan leher',
                    'nilai_densitas' => 0.9,
                    'media' => 'https://www.youtube.com/embed/wvRLpNypSKw?si=q3GXSl4bltxOlf8o',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G5',
                    'gejala' => 'Lumpuh ',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/ye0BBZcCrEQ?si=sy_w89o3TynEk3Nx',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G6',
                    'gejala' => 'Bagian tubuh yang tidak ditumbuhi bulu berwarna biru keunguan (jengger, pial, kelopak mata, kaki, perut)',
                    'nilai_densitas' => 0.9,
                    'media' => 'G6.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G7',
                    'gejala' => 'Pendarahan pada kaki berupa bintik merah (Ptekhie)',
                    'nilai_densitas' => 0.95,
                    'media' => 'G7.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G8',
                    'gejala' => 'Keluar cairan dari mata dan hidung',
                    'nilai_densitas' => 0.5,
                    'media' => 'G8.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G9',
                    'gejala' => 'Pembengkakan pada muka dan kepala',
                    'nilai_densitas' => 0.8,
                    'media' => 'G9.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G10',
                    'gejala' => 'Diare ',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/a94IRwNpt68?si=jG7u94gD28PVp64C',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G11',
                    'gejala' => 'Batuk ',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/vnqskRS36is?si=43TIyualhTmAAepa',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G12',
                    'gejala' => 'Bersin dan ngorok',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/zdzzSu1TUOM?si=xubsfe94nhyrqIHQ',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G13',
                    'gejala' => 'Nafsu makan menurun',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/rK4WBSb65l0?si=qJZ6oQZVBlFOZALN',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G14',
                    'gejala' => 'Gangguan syaraf',
                    'nilai_densitas' => 0.6,
                    'media' => 'https://www.youtube.com/embed/CB5zC-0Zhms?si=MYr1jmEXuSDvHJp_',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G15',
                    'gejala' => 'Tortikolis (leher miring)',
                    'nilai_densitas' => 0.85,
                    'media' => 'https://www.youtube.com/embed/T5A7SRpWtPM?si=NubzT9nXMpz1CP2q',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G16',
                    'gejala' => 'Gemetar',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/X6k_2uy0P8E?si=LZK9mSccDTChKFfr',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G17',
                    'gejala' => 'Timbul lesi',
                    'nilai_densitas' => 0.6,
                    'media' => 'G17.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G18',
                    'gejala' => 'Gangguan pernapasan',
                    'nilai_densitas' => 0.7,
                    'media' => 'https://www.youtube.com/embed/ptbkLeTnYno?si=nxe3zS1OtGLQkrOI',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G19',
                    'gejala' => 'Terdapat nodul (benjolan) | Pada Kulit',
                    'nilai_densitas' => 0.8,
                    'media' => 'G19.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G20',
                    'gejala' => 'Pertumbuhan terhambat (gangguan pertumbuhan)',
                    'nilai_densitas' => 0.5,
                    'media' => 'G20.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G21',
                    'gejala' => 'Anoreksia (gangguan makan)',
                    'nilai_densitas' => 0.55,
                    'media' => 'https://www.youtube.com/embed/coFXB6Z8aBk?si=tSx_c05VmTbb28VH',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G22',
                    'gejala' => 'Kelainan bulu, patah tungkai bulu sayap primer',
                    'nilai_densitas' => 0.91,
                    'media' => 'G22.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G23',
                    'gejala' => 'Bulu bagian kepala berwarna kuning sampai umur 30 hari',
                    'nilai_densitas' => 0.7,
                    'media' => 'G23.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G24',
                    'gejala' => 'Bulu seperti baling-baling',
                    'nilai_densitas' => 0.9,
                    'media' => 'G24.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G25',
                    'gejala' => 'Bobot hanya 250 gr/kurang dari separuh ukuran normal',
                    'nilai_densitas' => 0.7,
                    'media' => 'G25.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G26',
                    'gejala' => 'Kotoran kuning, lembek, tidak tercerna sempurna',
                    'nilai_densitas' => 0.6,
                    'media' => 'G26.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G27',
                    'gejala' => 'Sindroma kekerdilan/ kelainan',
                    'nilai_densitas' => 0.5,
                    'media' => 'G27.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G28',
                    'gejala' => 'Mati setelah beberapa jam terserang virus',
                    'nilai_densitas' => 0.6,
                    'media' => 'G28.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G29',
                    'gejala' => 'Keluar leleran hidung',
                    'nilai_densitas' => 0.5,
                    'media' => 'G29.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G30',
                    'gejala' => 'Eksudat berbuih di mata',
                    'nilai_densitas' => 0.8,
                    'media' => 'G30.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G31',
                    'gejala' => 'Anak ayam tampak tertekan dan akan cenderung meringkuk di dekat panas',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/aQyAx8VcZWU?si=PJwow4y-yWbdELio',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G32',
                    'gejala' => 'Depresi ',
                    'nilai_densitas' => 0.6,
                    'media' => 'https://www.youtube.com/embed/fmfldQ7-kvo?si=fnncPzoYB2fybpDc',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G33',
                    'gejala' => 'Lemah ',
                    'nilai_densitas' => 0.5,
                    'media' => 'G33.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G34',
                    'gejala' => 'Bulu berdiri dan kotor terutama di perut dan dubur',
                    'nilai_densitas' => 0.7,
                    'media' => 'G34.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G35',
                    'gejala' => 'Feses berwarna putih kapur dan kematian dehidrasi',
                    'nilai_densitas' => 0.6,
                    'media' => 'G35.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G36',
                    'gejala' => 'Keluar cairan mucus berdarah',
                    'nilai_densitas' => 0.7,
                    'media' => 'https://www.youtube.com/embed/vFn8UjWIcfY?si=JworJGwJTyikT02b',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G37',
                    'gejala' => 'Conjunctivitis',
                    'nilai_densitas' => 0.5,
                    'media' => 'G37.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G38',
                    'gejala' => 'Pembengkakak rongga infra orbital',
                    'nilai_densitas' => 0.7,
                    'media' => 'G38.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G39',
                    'gejala' => 'Pial kering',
                    'nilai_densitas' => 0.5,
                    'media' => 'G39.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G40',
                    'gejala' => 'Perut tampak membesar dan bila diraba (palpasi) terasa mengeras',
                    'nilai_densitas' => 0.95,
                    'media' => 'G40.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G41',
                    'gejala' => 'kurus',
                    'nilai_densitas' => 0.5,
                    'media' => 'G41.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G42',
                    'gejala' => 'Hilangnya keseimbangan tubuh diikuti lumpuh kaki dan sayap',
                    'nilai_densitas' => 0.9,
                    'media' => 'https://www.youtube.com/embed/iie1p7MOOdM?si=sPeOuOiw-0FZNsD1',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G43',
                    'gejala' => 'Folikel bulu membesar dan merah',
                    'nilai_densitas' => 0.9,
                    'media' => 'G43.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G44',
                    'gejala' => 'Ada tumor pada otot dan kulit',
                    'nilai_densitas' => 0.9,
                    'media' => 'G44.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G45',
                    'gejala' => 'Keratis dan kebutaan (iris abu-abu gelap)',
                    'nilai_densitas' => 0.75,
                    'media' => 'https://www.youtube.com/embed/lcnaDzKo5wc?si=65XMd0Dqen4NWKFk',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G46',
                    'gejala' => 'Pembesaran hati',
                    'nilai_densitas' => 0.5,
                    'media' => 'G46.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G47',
                    'gejala' => 'Diare berdarah',
                    'nilai_densitas' => 0.6,
                    'media' => 'https://www.youtube.com/embed/aPjym2p4kLE?si=AqEMbmQdcvCVXsuk',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G48',
                    'gejala' => 'Sesak napas dan megap-megap',
                    'nilai_densitas' => 0.75,
                    'media' => 'https://www.youtube.com/embed/nUCqjir-zUk?si=4ZIU05FlKtFcZpyy',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G49',
                    'gejala' => 'Paralysis partialis atau komplit',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/DLvXEFscACs?si=od04diig_ftR6JtS',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G50',
                    'gejala' => 'Balung dan pial cyanosis (membiru)',
                    'nilai_densitas' => 0.5,
                    'media' => 'G50.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G51',
                    'gejala' => 'Opisthotonus (tubuh kaku)',
                    'nilai_densitas' => 0.8,
                    'media' => 'https://www.youtube.com/embed/yhLPJDECpiU?si=H2ES3IQU2Maj3qxF',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G52',
                    'gejala' => 'Inkoordinasi tubuh',
                    'nilai_densitas' => 0.9,
                    'media' => 'https://www.youtube.com/embed/SCAufni9wxw?si=3GAzd_tPVGo_Wbib',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G53',
                    'gejala' => 'Pincang',
                    'nilai_densitas' => 0.5,
                    'media' => 'https://www.youtube.com/embed/zQFmh_DaPLA?si=8V-mc2H-8hHd4a-d',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'kode_gejala' => 'G54',
                    'gejala' => 'Pembengkakan tendon/sendi',
                    'nilai_densitas' => 0.95,
                    'media' => 'https://www.youtube.com/embed/a7WkEGKpJ-c?si=AFkBRAoERG-VXFk1',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],


            ];

        DB::table('tabel_data_gejala')->insert($insertedData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_gejala');
    }
}
