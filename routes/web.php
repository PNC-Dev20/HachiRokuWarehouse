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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/login', 'AuthController@login')->name('auth.login');
Route::post('/postlogin', 'AuthController@postLogin')->name('auth.postlogin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/mobil/export', 'MobilController@exportExcel')->name('mobil.excel');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/mobil', 'MobilController@index')->name('mobil.index');
    Route::post('/mobil', 'MobilController@store')->name('mobil.store');
    Route::get('/mobil/create', 'MobilController@create')->name('mobil.create');
    Route::get('/mobil/{id}/edit', 'MobilController@edit')->name('mobil.edit');
    Route::patch('/mobil/{id}', 'MobilController@update')->name('mobil.update');
    Route::get('/mobil/{id}/delete', 'MobilController@delete')->name('mobil.delete');
    Route::get('/mobil/{id}', 'MobilController@show')->name('mobil.show');
});
