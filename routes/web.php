<?php

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('create_certif', function () {

    $this->middleware('auth');
   
    return view('create_certif');
})->name('create_certif');
Route::get('certif_impression', function () {

    $this->middleware('auth');
    //$certif=App\Certification::where('id',5);
    return view('certif_impression');
})->name('certif_impression');
Route::get('dashboard', function () {

    $this->middleware('auth');
    $certif=App\Certification::all();
    return view('dashboard',compact('certif'));
})->name('dashboard');
Route::get('gestion_certif', function () {

    $this->middleware('auth');
    $certif=App\Certification::all();
    return view('gestion_certif',compact('certif'));
})->name('gestion_certif');
Route::get('certif_update', function () {

    $this->middleware('auth');
    $certif=App\Certification::all();
    return view('certif_update');
})->name('certif_update');
Auth::routes();
Route::resource('certif','CertificationController');

Route::get('/home', 'HomeController@index')->name('home');
