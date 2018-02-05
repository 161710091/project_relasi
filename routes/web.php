<?php
use App\dosens;
use App\jurusans;
use App\mahasiswas;
use App\mata_kuliahs;
use App\walis;
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
    return view('welcome');
});

Route::get('soal1', function(){
	$dosen = dosens::with('mahasiswa')->get();
	return view('tampilan', compact('dosen'));
});

Route::get('soal2', function(){
	$wali = walis::where('nama', '=', 'Achmad S')->get();
	return view('tampilan2', compact('wali'));
});
