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
                    '1.	Isolasi: Ayam yang diduga terinfeksi avian influenza harus segera diisolasi dari ayam lainnya. Ayam yang terinfeksi harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai.','2.	Pantau Gejala: Perhatikan gejala yang dialami oleh ayam yang terinfeksi. Gejala avian influenza dapat mencakup penurunan nafsu makan, demam, bersin, diare, batuk, dan kesulitan bernafas. Pantau dengan cermat dan catat perubahan dalam kondisi kesehatan ayam.
                ','3.	Karantina: Seluruh kawanan unggas lainnya di peternakan juga harus ditempatkan dalam karantina untuk mencegah penularan lebih lanjut. Ayam yang terinfeksi harus diisolasi secara total dari ayam yang sehat.
                ','4.	Eutanasi: Jika ayam terinfeksi avian influenza dan kondisinya sangat buruk atau untuk mencegah penularan lebih lanjut, mungkin perlu dilakukan eutanasi yang manusiawi terhadap ayam yang terinfeksi.
                ','5.	Pembersihan dan Disinfeksi: Kandang dan peralatan yang digunakan untuk ayam yang terinfeksi harus segera dibersihkan dan didisinfeksi dengan benar untuk menghentikan penyebaran virus. Ini termasuk membersihkan semua kotoran dan sisa-sisa unggas yang terinfeksi.',
                    '6.	Biosekuriti: Peternakan harus menerapkan langkah-langkah biosekuriti yang ketat, seperti mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta memastikan bahwa tidak ada barang atau hewan yang masuk atau keluar tanpa pemeriksaan yang ketat.',
                    '7.	Pelaporan: Di banyak negara, avian influenza adalah penyakit wajib yang harus dilaporkan kepada otoritas kesehatan hewan. Pastikan untuk melaporkan kasus ke otoritas yang berwenang agar langkah-langkah pengendalian lebih lanjut dapat diambil.',
                    
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P2',
                'nama_penyakit' => 'NEWCASTLE DISEASE (ND)',
                'solusi' => json_encode([
                    '1.	Isolasi: Ayam yang terinfeksi ND harus segera diisolasi dari ayam lainnya. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Pastikan bahwa mereka tidak memiliki kontak langsung dengan ayam sehat.
                    ','2.	Pantau Gejala: Perhatikan gejala yang dialami oleh ayam yang terinfeksi. Gejala ND dapat mencakup penurunan nafsu makan, demam, gangguan pernapasan, sekresi hidung, diare, atau gelisah. Pantau dengan cermat dan catat perubahan dalam kondisi kesehatan ayam.
                    ','3.	Karantina: Seluruh kawanan unggas lainnya di peternakan juga harus ditempatkan dalam karantina untuk mencegah penularan lebih lanjut. Ayam yang terinfeksi harus diisolasi secara total dari ayam yang sehat.
                    ','4.	Eutanasi: Kadang-kadang, eutanasi yang manusiawi perlu dilakukan pada ayam yang terinfeksi ND untuk mencegah penularan lebih lanjut, terutama jika kondisi ayam sangat buruk.
                    ','5.	Pembersihan dan Disinfeksi: Kandang dan peralatan yang digunakan untuk ayam yang terinfeksi harus segera dibersihkan dan didisinfeksi dengan benar untuk menghentikan penyebaran virus. Ini termasuk membersihkan semua kotoran dan sisa-sisa unggas yang terinfeksi.
                    ','6.	Vaksinasi: ND dapat dicegah dengan vaksinasi yang sesuai. Vaksinasi biasanya dilakukan secara rutin pada unggas sehat untuk mencegah infeksi ND. Tanyakan kepada dokter hewan Anda tentang jadwal vaksinasi yang sesuai.
                    ','7.	Biosekuriti: Terapkan langkah-langkah biosekuriti yang ketat, seperti mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta memastikan bahwa tidak ada barang atau hewan yang masuk atau keluar tanpa pemeriksaan yang ketat.
                    ','8.	Pelaporan: ND adalah penyakit wajib yang harus dilaporkan kepada otoritas kesehatan hewan di banyak negara. Pastikan untuk melaporkan kasus ke otoritas yang berwenang agar langkah-langkah pengendalian lebih lanjut dapat diambil.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P3',
                'nama_penyakit' => 'CACAR UNGGAS (FOWL FOX)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi unggas yang terinfeksi penyakit fowl pox dari unggas lain yang sehat. Tempatkan unggas yang sakit dalam kandang terpisah atau area yang ditentukan, dan jangan biarkan mereka memiliki kontak langsung dengan unggas lain untuk mencegah penularan penyakit.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang sakit untuk membantu meredakan gejala. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan yang bersih dan kering.
                    ','3.	Karantina: Jika Anda memiliki unggas yang baru datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu untuk mencegah penularan penyakit ke unggas yang sudah ada.
                    ','4.	Vaksinasi: Ada vaksin yang tersedia untuk mencegah penyakit fowl pox. 
                    ','5.	Biosekuriti: Terapkan langkah-langkah biosekuriti yang ketat, seperti mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','6.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan unggas yang sakit dengan benar untuk menghentikan penyebaran virus.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P4',
                'nama_penyakit' => 'INFECTIOUS BRONCHITIS (IB)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi IB dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi IB untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P5',
                'nama_penyakit' => 'INFECTION LARYNGO TRACHEITIS (ILT)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi ILT dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi ILT untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P6',
                'nama_penyakit' => 'ENCEPHALOMYELITIS (AE)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi AE dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi AE untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P7',
                'nama_penyakit' => 'CHICKEN ANEMIA SYNDROME (CAS)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi CAS dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi CAS untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P8',
                'nama_penyakit' => 'HELICOPTER DISEASE',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi HD dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi HD untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P9',
                'nama_penyakit' => 'INCLUSION BODY HEPATITIS (IBH)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi IBH dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi IBH untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P10',
                'nama_penyakit' => 'INFECTIOUS BURSAL DISEASE (IBD)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi ILT dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi ILT untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Vaksinasi: Vaksinasi dapat digunakan sebagai langkah pencegahan.
                    ','4.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','5.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','6.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P11',
                'nama_penyakit' => 'LYMPHOID LEUKOSIS (LL)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi unggas yang terinfeksi leukosis limfoid dari unggas yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penularan penyakit ke unggas lain.
                    ','2.	Pantau Gejala: Perhatikan gejala yang dialami oleh unggas yang terinfeksi leukosis limfoid. Gejala bisa bervariasi, tetapi mungkin mencakup penurunan berat badan, lemah, kehilangan nafsu makan, pembengkakan organ limfoid, dan perubahan dalam perilaku.
                    ','3.	Perawatan Simptomatik: Dalam beberapa kasus, perawatan simptomatik mungkin diperlukan untuk meredakan gejala dan menjaga kualitas hidup unggas yang terinfeksi. Ini mungkin mencakup memberikan makanan yang mudah dicerna, menjaga lingkungan kandang yang bersih, dan memberikan perawatan yang sesuai sesuai dengan instruksi dokter hewan.
                    ','4.	Pemantauan: Perlu memantau secara ketat unggas yang terinfeksi. Jika kualitas hidup mereka sangat terganggu atau gejala menjadi parah, mungkin perlu mempertimbangkan tindakan lebih lanjut, seperti eutanasi yang manusiawi untuk mengakhiri penderitaan.
                    ','5.	Pencegahan: Leukosis limfoid umumnya tidak memiliki pengobatan yang efektif. Oleh karena itu, pencegahan melalui vaksinasi dan tindakan biosekuriti yang ketat adalah tindakan yang lebih penting. Pastikan untuk mengikuti protokol vaksinasi yang sesuai dan menerapkan praktik biosekuriti yang baik di peternakan Anda.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P12',
                'nama_penyakit' => 'MAREK’S DISEASES',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi unggas yang terinfeksi Marek\'s disease dari unggas yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penularan penyakit ke unggas lain.
                    ','2.	Pantau Gejala: Perhatikan gejala yang dialami oleh unggas yang terinfeksi Marek\'s disease. Gejala bisa bervariasi, tetapi mungkin mencakup kelemahan, kehilangan nafsu makan, kelemahan pada satu atau beberapa kaki, kelumpuhan, dan perubahan dalam perilaku.
                    ','3.	Perawatan Simptomatik: Saat ini, tidak ada pengobatan spesifik yang efektif untuk penyakit Marek. Perawatan yang dapat diberikan adalah perawatan simptomatik untuk meredakan gejala dan menjaga kualitas hidup unggas yang terinfeksi. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','4.	Pencegahan: Pencegahan adalah kunci dalam pengendalian Marek\'s disease. Vaksinasi adalah metode pencegahan yang sangat penting. Pastikan untuk mengikuti protokol vaksinasi yang sesuai untuk unggas Anda. Selain itu, praktik biosekuriti yang ketat sangat penting untuk mencegah penyakit ini menyebar ke peternakan Anda.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P13',
                'nama_penyakit' => 'SWOLLEN HEAD SYNDROME (SHS)',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi SHS dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi SHS untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','4.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','5.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
                ]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode_penyakit' => 'P14',
                'nama_penyakit' => 'VIRAL ARTHITIS',
                'solusi' => json_encode([
                    '1.	Isolasi: Segera isolasi ayam yang terinfeksi Viral Arthitis dari ayam yang sehat. Mereka harus ditempatkan dalam kandang terpisah yang memiliki fasilitas isolasi yang memadai. Ini akan membantu mencegah penyebaran virus ke unggas lain.
                    ','2.	Perawatan Simptomatik: Berikan perawatan simptomatik kepada unggas yang terinfeksi Viral Arthitis untuk membantu meredakan gejala dan menjaga mereka dalam kondisi yang lebih nyaman. Ini mungkin mencakup memberikan makanan dan air yang mudah dicerna, menjaga lingkungan kandang yang bersih.
                    ','3.	Biosekuriti: Terapkan tindakan biosekuriti yang ketat untuk mencegah penularan penyakit ke unggas lain atau ke tempat lain. Ini termasuk mengganti pakaian dan alas kaki sebelum memasuki dan meninggalkan kandang, serta menjaga kebersihan peralatan dan fasilitas peternakan.
                    ','4.	Pembersihan dan Disinfeksi: Pembersihan dan disinfeksi kandang dan peralatan dengan benar untuk menghentikan penyebaran virus.
                    ','5.	Karantina: Jika ada unggas baru yang datang ke peternakan, pastikan untuk menjalani proses karantina terlebih dahulu sebelum memperkenalkan mereka ke unggas yang ada.
                    ',
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
