<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return '<h1>Halo</h1>'
    .'Selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
});

Route::get('profil', function() {
    return view('biodata');
});

// Route::get('profil1', function() {
//     return view('profil1');
// });

// Route::get('profil2', function() {
//     return view('profil2');
// });

// Route::get('profil3', function() {
//     return view('profil3');
// });

// Route::get('profil4', function() {
//     return view('profil4');
// });

//Route parameter
Route::get('pesan/{makanan}', function($mkn) {
    return 'Makanan Yang saya pesan adalah '.$mkn;
});

Route::get('pesan/{makan}/{minuman}/{harga}', function($mkn,$mnm,$hrg) {
    return 'Saya membeli '.$mkn.' dan '.$mnm.
            '<br>dengan harga'.$hrg;
});

//Route Optional parameter
Route::get('halo/{nama?}', function($nama='Nurhadi Aldo' ) {
    return 'Haloo Nama saya adalah '.$nama;
});

Route::get('pesanan/{makan?}/{minuman?}/{harga?}', function($mkn =null,$mnm=null,$hrg=null)
{
    if (isset($mkn)) {
        echo "Anda Memesan : ".$mkn;
    }
    if (isset($mnm)) {
        echo " dan ".$mnm;
    }
    if (isset($hrg)) {
       echo "<br>Harga : ".$hrg;
    }
    if (!$mkn && !$mnm && !$hrg) {
        echo "Anda belum memesan sesuatu";
     }

});

Route::get('/testmodel', function() {
    $query = App\Post::all();
    return $query;
});

Route::get('/testmodel1', function() {
    $query = App\Post::find(2);
    return $query;
});

Route::get('/testmodel2', function() {
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('/testmodel3', function() {
    $post = App\Post::find(1);
    $post -> title = "Ciri Keluarga Sakinah";
    $post -> save();
    return $post;
});

Route::get('/testmodel4', function() {
    $post = App\Post::find(1);
    $post -> delete();
});

Route::get('/testmodel5', function() {
    $post = new App\Post;
    $post -> title = "7 Amalan Pembuka Jodoh";
    $post -> content = "shalat malam,sedekah,puasa sunah,silaturahmi,senyum,doa,tobat";
    $post -> save();
    return $post;
});

Route::get('/gaji', function() {
    $query = App\Penggajian::all();
    return $query;
});
