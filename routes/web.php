<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/clear',function(){

//     \Artisan::call('route:clear');
//     \Artisan::call('cache:clear');
// });

Route::get('/', function () {
return view('home');
})->name('home');



Route::get('/obstetric-ultrasound-routine-ultrasound', function () {
    return view('obstetric-ultrasound-routine-ultrasound');
    })->name('obstetric-ultrasound-routine-ultrasound');

Route::get('anomaly-scan', function () {
    return view('anomaly-scan');
    })->name('anomaly-scan');

Route::get('anomaly-scan', function () {
    return view('anomaly-scan');
    })->name('anomaly-scan');

Route::get('nt-scan', function () {
    return view('nt-scan');
    })->name('nt-scan');

Route::get('transrectal-transvaginal-scan', function () {
    return view('transrectal-transvaginal-scan');
    })->name('transrectal-transvaginal-scan');

Route::get('colour-doppler', function () {
    return view('colour-doppler');
    })->name('colour-doppler');

Route::get('usg-guided-procedures-biopsy', function () {
    return view('usg-guided-procedures-biopsy');
    })->name('usg-guided-procedures-biopsy');

Route::get('usg-breast-sonomammography', function () {
    return view('usg-breast-sonomammography');
    })->name('usg-breast-sonomammography');

Route::get('usg-thyroid-neck-local-part', function () {
    return view('usg-thyroid-neck-local-part');
    })->name('usg-thyroid-neck-local-part');


Route::get('about', function () {
    return view('about');
    })->name('about');

Route::get('patient-info', function () {
    return view('patient-info');
    })->name('patient-info');

Route::get('contact', function () {
    return view('contact');
    })->name('contact');

Route::get('testimonials', function () {
    return view('testimonials');
    })->name('testimonials');

Route::get('gallery', function () {
        return view('gallery');
        })->name('gallery');

Route::get('services', function () {
    return view('services');
    })->name('services');



Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
