<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatans')->insert([
            [
                // 'foto' => 'batik celup.jpeg',
                'judul' => 'Batik Celup',
                'deskripsi' => 'Kegiatan rutin yang dilakukan di panti Asuhan Putri Aisyiyah Malang'
            ],
            [
                // 'foto' => 'batik celup1.jpeg',
                'judul' => 'Batik Celup',
                'deskripsi' => 'Kegiatan rutin yang dilakukan di panti Asuhan Putri Aisyiyah Malang'
            ],
            [
                // 'foto' => 'batik celup2.jpeg',
                'judul' => 'Batik Celup',
                'deskripsi' => 'Kegiatan rutin yang dilakukan di panti Asuhan Putri Aisyiyah Malang'
            ],
            [
                // 'foto' => 'batik celup3.jpeg',
                'judul' => 'Batik Celup',
                'deskripsi' => 'Kegiatan rutin yang dilakukan di panti Asuhan Putri Aisyiyah Malang'
            ],
            [
                // 'foto' => 'jalan jalan.jpeg',
                'judul' => 'Jalan - Jalan Ceria',
                'deskripsi' => 'Kegiatan yang dilakukan guna untuk melepas lelah dan penat selama kegiatan belajar mengajar yang diikuti oleh siswa maupun pengasuh'
            ],
            [
                // 'foto' => 'jalan jalan2.jpeg',
                'judul' => 'Jalan Jalan Ceria 2',
                'deskripsi' => 'Kegiatan yang dilakukan guna untuk melepas lelah dan penat selama kegiatan belajar mengajar yang diikuti oleh siswa maupun pengasuh'
            ],
            [
                // 'foto' => 'jalan jalan3.jpeg',
                'judul' => 'Jalan Jalan Ceria 3',
                'deskripsi' => 'Kegiatan yang dilakukan guna untuk melepas lelah dan penat selama kegiatan belajar mengajar yang diikuti oleh siswa maupun pengasuh'
            ],
            [
                // 'foto' => 'kurban.jpeg',
                'judul' => 'Penyembelihan Hewan Kurban',
                'deskripsi' => 'Kegiatan yang dilakukan dalam rangka memperingati Hari Raya Idul Adha disetiap tahunnya, Panti Asuhan Putri Aisyiyah Malang melaksanakan kegiatan penyembelihan hewan qurban'
            ],
            [
                // 'foto' => 'kurban2.jpeg',
                'judul' => 'Penyembelihan Hewan Kurban 2',
                'deskripsi' => 'Kegiatan yang dilakukan dalam rangka memperingati Hari Raya Idul Adha disetiap tahunnya, Panti Asuhan Putri Aisyiyah Malang melaksanakan kegiatan penyembelihan hewan qurban'
            ],
            [
                // 'foto' => 'parenting.jpeg',
                'judul' => 'Parenting',
                'deskripsi' => 'Merupakan kegiatan atau pekerjaan orangtua dalam mengasuh anak melalui kegiatan parenting juga orangtua dapat mengetahui capaian perkembangan anak dan memberikan pengetahuan kepada orangtua'
            ],
            [
                // 'foto' => 'parenting2.jpeg',
                'judul' => 'Parenting',
                'deskripsi' => 'Merupakan kegiatan atau pekerjaan orangtua dalam mengasuh anak melalui kegiatan parenting juga orangtua dapat mengetahui capaian perkembangan anak dan memberikan pengetahuan kepada orangtua'
            ],
            [
                // 'foto' => 'riilah2.jpeg',
                'judul' => 'Kegiatan perpisahan dan pelepasan Santriwati',
                'deskripsi' => 'Riilah merupakan kegiatan perjalanan yang dilakukan oleh santri untuk menuntut ilmu diluar panti asuhan'
            ] 
        ]
        );
    }
}
