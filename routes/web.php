<?php
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
Route::get('/', function () {
    $berita              = \DB::table('berita')->get();

    return view('welcome')
    ->with('berita',$berita);
        
});
Route::get('/detail_berita/{id}', 'BeritaController@detail');
// Route::get('/', function () {
//     return redirect('/login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');
Route::get('/siswa/{id}/profile', 'SiswaController@profile');
Route::get('/siswa/{id}/delete', 'SiswaController@destroy');

Route::get('/kelas', 'KelasController@index');
Route::post('/kelas/create', 'KelasController@create');
Route::get('/kelas/{id}/edit', 'KelasController@edit');
Route::post('/kelas/{id}/update', 'KelasController@update');
Route::get('/kelas/{id}/delete', 'KelasController@destroy');
Route::get('/kelas/siswa', 'KelasController@show');

Route::get('/profil/{user_id}/edit', 'SiswaController@editProfile');
Route::get('/profil/{user_id}', 'SiswaController@profilSaya');

Route::get('/mapel', 'MapelController@index');
Route::post('/mapel/create', 'MapelController@create');
Route::get('/mapel/{id}/edit', 'MapelController@edit');
Route::post('/mapel/{id}/update', 'MapelController@update');
Route::get('/mapel/{id}/delete', 'MapelController@destroy');
Route::get('/mapel/siswa', 'MapelController@show');

Route::get('/berita','BeritaController@index');
Route::get('/berita/create','BeritaController@create');
Route::post('/berita/upload','BeritaController@upload');

Route::get('/berita/hapus/{id}','BeritaController@destroy');
Route::get('/berita/{id}/edit','BeritaController@edit');
Route::post('/berita/{id}/update/','BeritaController@update');

Route::get('/profil_sekolah', 'ProfilController@index');
Route::get('/profil_sekolah/{id}/edit', 'ProfilController@edit');
Route::post('/profil_sekolah/{id}/update', 'ProfilController@update');

Route::get('/profil_sma', function () {
    $profil              = \DB::table('profil_sekolah')->get();

    return view('profil')
    ->with('profil',$profil);
        
});

Route::get('/admin', 'UserController@index');
Route::get('/admin/{id}/edit','UserController@edit');
Route::post('/admin/{id}/update', 'UserController@update');
Route::get('/admin/{id}/delete', 'UserController@destroy');
Route::get('/admin/{id}/profile', 'UserController@profile');
Route::get('/profil_admin/{id}', 'UserController@profilSaya');
Route::get('/profil_admin/{id}/edit', 'UserController@editProfile');
















