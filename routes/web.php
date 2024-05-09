<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    $array = ['siti-web', 'ecommerce', 'gestionali-cloud', 'marketing-digitale'];
    return view('homepage', ['array' => $array]);
})->name('homepage');

Route::get('/Chi-Sono', function () {
    $array = ['siti-web', 'ecommerce', 'gestionali-cloud', 'marketing-digitale'];
    return view('aboutus', ['array' => $array]);
})->name('aboutus');

Route::get('/Servizi-Offerti',
function () {
    $array = ['siti-web', 'ecommerce', 'gestionali-cloud', 'marketing-digitale'];
    return view('services', ['array' => $array]);
}
)->name('services');

Route::get('/Servizi-Offerti/{services}', function ($services) {
        return view('detail');
    })->name('detail');
    
    
    
    
    ?>