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
