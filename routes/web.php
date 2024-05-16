<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', [PageController::class, 'homepage'])->name('homepage');

Route::get('/Chi-Sono', [PageController::class, 'aboutus'])->name('aboutus');

Route::get('/Servizi-Offerti', [PageController::class, 'services'])->name('services');

Route::get('/Servizi-Offerti/{service}', [PageController::class, 'service'])->name('service');

Route::get('/Contatti', [PageController::class, 'contacts'])->name('contacts');

Route::post('', [PageController::class, 'send'])->name('send');

Route::get('/Grazie', [PageController::class, 'thankyou'])->name('thankyou');
    
    
    
    ?>