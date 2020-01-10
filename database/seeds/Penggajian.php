<?php

use Illuminate\Database\Seeder;

class Penggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            ['nama'=>'Andrian', 'jabatan'=>'Direktur', 'jk'=>'Laki-laki', 'alamat'=>'Dago', 'agama'=>'Islam', 'total_gaji'=>'25jt'],
            ['nama'=>'Azis', 'jabatan'=>'Karyawan', 'jk'=>'Laki-laki', 'alamat'=>'Bandung', 'agama'=>'Atheis', 'total_gaji'=>'5jt'],
            ['nama'=>'Iangsam', 'jabatan'=>'Staff', 'jk'=>'Laki-laki', 'alamat'=>'Rancamanyar', 'agama'=>'Kristen', 'total_gaji'=>'7jt'],
            ['nama'=>'Ikoy', 'jabatan'=>'Personalia', 'jk'=>'Laki-laki', 'alamat'=>'Kota Baru', 'agama'=>'Khatolik', 'total_gaji'=>'6jt'],
            ['nama'=>'Dewi', 'jabatan'=>'Keuangan', 'jk'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Islam', 'total_gaji'=>'5jt']
        ];
        DB::table('penggajians')->insert($posts);

    }
}
