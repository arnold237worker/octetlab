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
    Route::get('/', 'HomeController@home')->name('accueil');
    Route::post('/demander-un-devis', 'HomeController@demander_un_devis')->name('demander-un-devis');
    Route::post('/demander-package', 'HomeController@demander_package')->name('demander-package');
    Route::get('/services/{slug}', 'HomeController@service')->name('services.details');
    Route::get('/realisations', 'HomeController@realisations')->name('realisations');
    Route::get('/realisations/{slug}', 'HomeController@realisation')->name('realisations.details');
    Route::get('/contactez-nous', 'HomeController@contact')->name('contact');
    Route::post('/envoyer-message', 'HomeController@envoyer_message')->name('envoyer-message');
    Route::get('/a-propos', 'HomeController@about')->name('a-propos');
    Route::get('/packages', 'HomeController@packages')->name('packages');
    Route::get('/notre-demarche', 'HomeController@demarche')->name('demarche');
    Route::post('/noter-octetlab', 'HomeController@noter_octetlab')->name('noter-octetlab');
    Route::get('/rechercher', 'HomeController@rechercher')->name('rechercher');
    Route::post('/newsletter', 'HomeController@newsletter')->name('newsletter.subscribe');
    
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    
    
    

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
