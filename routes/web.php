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
//umum

Route::get('/', function () {
    return view('index');
});

route::get('/fasilitasumum', 'CrudController@tampilfasilitasumum');

//login

Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

Route::get('/index-admin', function () {
	if(session()->exists('admin')) {
		return view('index-admin');
    }
    else { return redirect('/login'); }
    return redirect('/login');
});

//tampil admin
//fasilitas
Route::get('/admin-fasilitas', 'CrudController@tampilfasilitas');
Route::post('/fasilitas/tambahfasilitas', 'CrudController@tambahfasilitas');
Route::get('/hapusfasilitas/{id}', 'CrudController@hapusfasilitas');