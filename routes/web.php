<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CDataController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MSensorController;
use App\Http\Controllers\RealTimeController;
use App\Http\Controllers\RegisterController;
use App\http\Controllers\DatatableController;
use App\Models\CData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "Welcome",
    ]);
});

Route::get('/homepage', function () {
    return view('homepage', [
        "title" => "Home",
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
    ]);
});

Route::get('/setup', function () {
    return view('setupparameter', [
        "title" => "Setup Parameter",
    ]);
});

Route::get('/datatable', function () {
    return view('datatable', [
        "title" => "Data Table",
    ]);
});

Route::get('/cdata/{id}/edit', [CDataController::class, 'edit'])->name('cdata.edit');
Route::put('/cdata/{id}', [CDataController::class, 'update'])->name('cdata.update');

Route::get('/pegawai','CDataController@index');
Route::get('/pegawai/tambah','CDataController@tambah');
Route::post('/pegawai/store','CDataController@store');
Route::get('/pegawai/edit','CDataController@edit');
Route::post('/pegawai/update','CDataController@update');


Route::get('/editdataparameter','CDataController@edit');
Route::post('/updatedataparameter','CDataController@update');

Route::get('/datasuhu', [MSensorController::class, 'datasuhu']);

Route::get('/console', [ChartController::class, 'index']);

Route::get('/datatable', [DatatableController::class, 'index']);

Route::get('/chart-data', [RealTimeController::class, 'bacarealtime']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'register']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/bacasuhu', [MSensorController::class, 'bacasuhu']);

Route::get('/bacakelembaban', [MSensorController::class, 'bacakelembaban']);

Route::get('/bacacahaya', [MSensorController::class, 'bacacahaya']);

Route::get('/bacatakar1', [MSensorController::class, 'bacatakar1']);

Route::get('/bacatanggal', [MSensorController::class, 'bacatanggal']);

Route::get('/c_light', [CDataController::class, 'c_light']);
Route::get('/c_lightoff', [CDataController::class, 'c_lightoff']);
Route::get('/c_pump', [CDataController::class, 'c_pump']);
Route::get('/c_pumpoff', [CDataController::class, 'c_pumpoff']);
Route::get('/c_atomizer', [CDataController::class, 'c_atomizer']);
Route::get('/c_atomizeroff', [CDataController::class, 'c_atomizeroff']);

Route::get('/grafik', 'GrafikController@index');
// Route::get('/editparameter', 'CDataController@edit');
// Route::post('up-cdata/{id}', 'CDataController@update');

Route::get('/editparameter', function () {
    return view('modal.editparameter', [
        "title" => "editparameter",
    ]);
});
