<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Route::group(['middleware' => 'locale'], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('accueil');
    
    Route::get('/a-propos', function () {
        return view('about');
    })->name('a-propos');
    
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    
    Route::get('/realisations', function () {
        return view('realisations');
    })->name('realisations');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::get('/prix', function () {
        return view('contact');
    })->name('prix');

    Route::get('/mentions-legales', function () {
        return view('mentions');
    })->name('mentions-legales');

    Route::get('/conditions-generales', function () {
        return view('conditions');
    })->name('conditions-generales');
});

Route::get("lang/{locale}", function (Request $request, $locale) {
    if(in_array($locale,['en','fr','de'])){
        session(['locale'=> $locale]);
      }
      return back();
});
