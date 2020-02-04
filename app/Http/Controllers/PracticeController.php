<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung";
        return view('latihan',compact('a'));
    }
    public function pass1()
    {
        $data = [
            ['nama' => 'Ucup', 'kelas' => 'RPL2'],
            ['nama' => 'Icip', 'kelas' => 'RPL1'],
            ['nama' => 'Ecep', 'kelas' => 'RPL3'],
        ];
        return view('latihan1', ['siswa' => $data]);
    }
    public function pass2()
    {
        $data = [
            ['nama' => 'Andrian', 'nip' => '123', 'agama' => 'Islam', 'jk' => 'Laki-laki',
            'Jabatan' => 'Manager', 'jamker' => '300'],
            ['nama' => 'Ikoy', 'nip' => '456', 'agama' => 'Kristen', 'jk' => 'Laki-laki',
            'Jabatan' => 'Sekretaris', 'jamker' => '210'],
            ['nama' => 'Nathan', 'nip' => '321', 'agama' => 'Kongkhucu', 'jk' => 'Perempuan',
            'Jabatan' => 'Staff', 'jamker' => '100'],
        ];
        return view('latihan2', ['data' => $data]);
    }
}
