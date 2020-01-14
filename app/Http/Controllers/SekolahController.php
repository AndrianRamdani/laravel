<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    // public function hallo(){
    //     return "Hallo dunia";
    // }
    // public function dunia(){
    //     return "dunia";
    // }
    // public function ikoy(){
    //     return "Hallo ikoy";
    // }
    // public function ewok(){
    //     return "Hallo ewok";
    // }
    // public function ian(){
    //     return "Hallo iann";
    // }
    // public function al(){
    //     return "Hallo al";
    // }
    // public function ari(){
    //     return "Hallo ari";
    // }
    // public function erik(){
    //     return "Hallo erik";
    // }
    // public function nauly(){
    //     return "Hallo nauly";
    // }
    // public function abin(){
    //     return "Hallo abin";
    // }
    public function jeniskucing($warna =null){

    if (!$warna) {
        return "warna belum dipilih";
    }
    else {
        return "warna kucing kamu : ".$warna;
    }

    }

    public function buy($mkn=null,$harga=null)
{
    if ($mkn) {
        echo "Anda membeli <b>$mkn</b>";

    }
     if ($harga >= 15000) {
        echo ", dengan ukuran <b>Jumbo</b>";
    }if ($harga < 15000 && $harga >= 7500) {
        echo ", dengan ukuran <b>Medium</b>";
    }if ($harga < 7000 && $harga >= 1) {
        echo ", dengan ukuran <b>Small</b>";
    }
    if ($harga <=1) {
    echo "Anda memasukan harga yang salah";
    }
    if (!$harga && !$mkn) {
        return "Silahkan masukan makanan terlebih dahulu";
    }
}



}
