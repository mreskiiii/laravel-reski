<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes web : G231220075 PW @Dit3113
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('/perpus/main');
    return redirect('perpus');
});
Route::get('/info', function () {
    return view('info',['progdi'=>'TI']);
});
use App\Http\Controllers\InfoController;
Route::get('/info/{kd}',[InfoController::class,'infoMhs']);

/*
Route::get('/buku',function(){
    return view('buku.add',[
        'is_update'=>0,
        'optkategori'=>[
            ''=>'-Pilih salah satu-',
            'novel'=>'Novel',
            'komik'=>'Komik',
            'kamus'=>'Kamus',
            'program'=>'Pemprograman'
        ]
        ]);
});
*/
use App\Http\Controllers\BukuController;
Route::get('/buku',[BukuController::class,'index']);
Route::get('/buku/add',[BukuController::class,'add_new']);
Route::get('/buku/save',[BukuController::class,'save']);
Route::get('/buku/edit/{id}',[BukuController::class,'edit']);
Route::get('/buku/delete/{id}',[BukuController::class,'delete']);

use App\Http\Controllers\AnggotaController;
Route::get('/anggota',[AnggotaController::class,'index']);
Route::get('/anggota/add',[AnggotaController::class,'add_new']);
Route::get('/anggota/save',[AnggotaController::class,'save']);
Route::get('/anggota/edit/{id}',[AnggotaController::class,'edit']);
Route::get('/anggota/delete/{id}',[AnggotaController::class,'delete']);

use App\Http\Controllers\PinjamController;
Route::get('/pinjam',[PinjamController::class,'index']);
Route::get('/pinjam/save',[PinjamController::class,'save']);

use App\Http\Controllers\PerpusController;
Route::get('/perpus',[PerpusController::class,'index']);
/*Route::get('/login',function(){
    return view('perpus.login');
});*/
Route::get('/login',[PerpusController::class,'login'])->name('login');

//use App\Http\Controllers\LoginController;
//Route::get('/login',[LoginController::class,'authenticate']);
//Route::get('/login',[LoginController::class,'login']);