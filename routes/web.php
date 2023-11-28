<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\dataPasienController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\RiwayatController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Petugas\dashPetugasController;
use App\Http\Controllers\Petugas\InfoController as PetugasInfoController;
use App\Http\Controllers\Petugas\ObatController as PetugasObatController;
use App\Http\Controllers\Petugas\PasienController;
use App\Http\Controllers\Petugas\RiwayatController as PetugasRiwayatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/info', 'information');
    Route::get('/data', 'patientData');
});

// Route::get('/', function () {
//     return Inertia::render('Home');
// });

// ini route admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/home', 'base')->name('base.Admin');
    });

    // Tabel Petugas
    Route::controller(PetugasController::class)->group(function () {
        Route::get('/petugas', 'petugas')->name('Admin.index.petugas');
        Route::post('/tambah/petugas', 'tambahPetugas')->name('Admin.tambah.petugas');
        Route::post('/show/petugas', 'showPetugas')->name('Admin.show.petugas');
        Route::put('/petugas/{id}', 'updatePetugas')->name('Admin.update.petugas');
        Route::delete('/delete/{id}', 'deletePetugas')->name('Admin.delete.petugas');
    });

    // Tabel Obat
    Route::controller(ObatController::class)->group(function () {
        Route::get('/obat', 'obat')->name('Admin.index.obat');
        Route::get('/obat/form', 'formObat')->name('Admin.form.obat');
        Route::post('/create/obat', 'createObat')->name('Admin.create.obat');
        Route::post('/show/obat', 'showObat')->name('Admin.show.obat');
        Route::put('/obat/{id}', 'updateObat')->name('Admin.update.obat');
        Route::delete('/deleteObat/{id}', 'deleteObat')->name('Admin.delete.obat');
    });

    // Tabel Info
    Route::controller(InfoController::class)->group(function () {
        Route::get('/info', 'info')->name('Admin.index.info');
        Route::post('/tambah/info', 'tambahInfo')->name('Admin.tambah.info');
        Route::post('/show/info', 'showInfo')->name('Admin.show.info');
        Route::put('/update/info/{id}', 'updateInfo')->name('Admin.update.info');
        Route::delete('/deleteInfo/{id}', 'deleteInfo')->name('Admin.delete.info');
        Route::get('/Info-search', 'searchInfo')->name('Info.search');
    });

    // Tabel Jabatan
    Route::controller(JabatanController::class)->group(function () {
        Route::get('/jabatan', 'jabatan')->name('Admin.index.jabatan');
        Route::post('/tambah/jabatan', 'tambahJabatan')->name('Admin.tambah.jabatan');
        Route::put('/jabatan/{id}', 'updateJabatan')->name('Admin.update.jabatan');
        Route::delete('/deleteJabatan/{id}', 'deleteJabatan')->name('Admin.delete.jabatan');
    });

    // Tabel Data Pasien
    Route::controller(dataPasienController::class)->group(function () {
        Route::get('/pasien', 'pasien')->name('Admin.index.pasien');
        Route::post('/tambah/pasien', 'tambahPasien')->name('Admin.tambah.pasien');
        Route::post('/show/pasien', 'showPasien')->name('Admin.show.pasien');
        Route::put('/pasien/{id}', 'updatePasien')->name('Admin.update.pasien');
        Route::delete('/deletePasien/{id}', 'deletePasien')->name('Admin.delete.pasien');
    });
    // Tabel Riwayat Penyakit
    Route::controller(RiwayatController::class)->group(function () {
        Route::get('/riwayat', 'riwayatPenyakit')->name('Admin.index.riwayat');
        Route::post('/tambah/riwayat', 'tambahRiwayat')->name('Admin.tambah.riwayat');
        Route::post('/show/riwayat', 'showRiwayat')->name('Admin.show.riwayat');
        Route::get('/edit/riwayat/{id}', 'edit')->name('Admin.edit.riwayat');
        Route::put('/update/riwayat/{id}', 'update')->name('Admin.update.riwayat');
        Route::delete('/deleteriwayat/{id}', 'deleteRiwayat')->name('Admin.delete.riwayat');
    });
    // ini buat Chart
    Route::controller(ChartController::class)->group(function () {
        Route::get('/chart', 'chart')->name('index.chart');
    });
});


    // ini route Petugas
Route::prefix('petugas')->middleware(['auth', 'isPetugas'])->group(function () {
    Route::controller(dashPetugasController::class)->group(function () {
        Route::get('/home', 'index')->name('petugas.index.home');
        Route::get('/profile', 'profile')->name('petugas.profile');
        Route::put('/profile/{id}', 'updateProfile')->name('update.profile');
    });

    // Tabel Info
    Route::controller(PetugasInfoController::class)->group(function () {
        Route::get('/info', 'info')->name('petugas.index.info');
        Route::post('/tambah/info', 'tambahInfo')->name('petugas.tambah.info');
        Route::post('/show/info', 'showInfo')->name('petugas.show.info');
        Route::put('/info/{id}', 'updateInfo')->name('petugas.update.info');
        Route::delete('/deleteInfo/{id}', 'deleteInfo')->name('petugas.delete.info');
        Route::get('/Info-search', 'searchInfo')->name('petugas.Info.search');
    });

    // Tabel Obat
    Route::controller(PetugasObatController::class)->group(function () {
        Route::get('/obat', 'obat')->name('petugas.index.obat');
        Route::get('/obat/form', 'formObat')->name('petugas.form.obat');
        Route::post('/create/obat', 'createObat')->name('petugas.create.obat');
        Route::post('/show/obat', 'showObat')->name('petugas.show.obat');
        Route::put('/obat/{id}', 'updateObat')->name('petugas.update.obat');
        Route::delete('/deleteObat/{id}', 'deleteObat')->name('petugas.delete.obat');
    });

    // Tabel Data Pasien
    Route::controller(PasienController::class)->group(function () {
        Route::get('/pasien', 'pasien')->name('petugas.index.pasien');
        Route::post('/tambah/pasien', 'tambahPasien')->name('petugas.tambah.pasien');
        Route::post('/show/pasien', 'showPasien')->name('petugas.show.pasien');
        Route::put('/pasien/{id}', 'updatePasien')->name('petugas.update.pasien');
        Route::delete('/deletePasien/{id}', 'deletePasien')->name('petugas.delete.pasien');
    });

    // Tabel Riwayat Penyakit
    Route::controller(PetugasRiwayatController::class)->group(function () {
        Route::get('/riwayat', 'riwayatPenyakit')->name('petugas.index.riwayat');
        Route::post('/tambah/riwayat', 'tambahRiwayat')->name('petugas.tambah.riwayat');
        Route::post('/show/riwayat', 'showRiwayat')->name('petugas.show.riwayat');
        Route::get('/edit/riwayat/{id}', 'edit')->name('petugas.edit.riwayat');
        Route::put('/update/riwayat/{id}', 'update')->name('petugas.update.riwayat');
        Route::delete('/deleteriwayat/{id}', 'deleteRiwayat')->name('petugas.delete.riwayat');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
