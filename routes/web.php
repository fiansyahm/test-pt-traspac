<?php

use Illuminate\Support\Facades\Route;


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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FlipbookController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UnitKerjaController;



Route::get('/', function () {
    return view('home');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/wpadmin', [SessionController::class, 'wpadmin']);
    Route::get('/admin/resume/dashboard', [SessionController::class, 'AdminDashboard']);
});

Route::get('/wpadmin-login', [SessionController::class, 'index'])->name('login');
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);
Route::get('/session/register', [SessionController::class, 'register']);
Route::post('/session/register', [SessionController::class, 'createUser']);


// Route untuk halaman daftar pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');

// Route untuk menampilkan form tambah pegawai
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

// Route untuk menyimpan data pegawai yang ditambahkan
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

// Route untuk menampilkan form edit pegawai
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');

// Route untuk menyimpan data pegawai yang diperbarui
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');

// Route untuk menghapus data pegawai
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

// Route untuk mengelola upload foto pegawai
Route::get('/pegawai/upload/{pegawai}', [PegawaiController::class, 'upload'])->name('pegawai.upload');

// Route untuk mengelola upload foto pegawai
Route::post('/pegawai/upload/{id}', [PegawaiController::class, 'store_photo'])->name('pegawai.store_photo');

// Route untuk halaman daftar jabatan
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');

// Route untuk menampilkan form tambah jabatan
// Route untuk menampilkan form tambah jabatan
Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');

// Route untuk menyimpan data jabatan yang ditambahkan
Route::post('/jabatan', [JabatanController::class, 'store'])->name('jabatan.store');

// Route untuk menampilkan form edit jabatan
Route::get('/jabatan/{jabatan}/edit', [JabatanController::class, 'edit'])->name('jabatan.edit');

// Route untuk menyimpan data jabatan yang diperbarui
Route::put('/jabatan/{jabatan}', [JabatanController::class, 'update'])->name('jabatan.update');

// Route untuk menghapus data jabatan
Route::delete('/jabatan/{jabatan}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

// Route untuk halaman daftar unit kerja
Route::get('/unit-kerja', [UnitKerjaController::class, 'index'])->name('unit_kerja.index');

// Route untuk menampilkan form tambah unit kerja
Route::get('/unit-kerja/create', [UnitKerjaController::class, 'create'])->name('unit_kerja.create');

// Route untuk menyimpan data unit kerja yang ditambahkan
Route::post('/unit-kerja', [UnitKerjaController::class, 'store'])->name('unit_kerja.store');

// Route untuk menampilkan form edit unit kerja
Route::get('/unit-kerja/{unit_kerja}/edit', [UnitKerjaController::class, 'edit'])->name('unit_kerja.edit');

// Route untuk menyimpan data unit kerja yang diperbarui
Route::put('/unit-kerja/{unit_kerja}', [UnitKerjaController::class, 'update'])->name('unit_kerja.update');

// Route untuk menghapus data unit kerja
Route::delete('/unit-kerja/{unit_kerja}', [UnitKerjaController::class, 'destroy'])->name('unit_kerja.destroy');

// symlink
Route::get('/symlink', function () {
    $linkFolder=public_path('storage');
    $targetFolder=storage_path('app/public');
   // Make sure the target folder exists before creating the symlink
    if (!is_dir($targetFolder)) {
        die('Target folder does not exist.');
    }

    // Use shell_exec to execute the ln -s command
    $command = "ln -s $targetFolder $linkFolder";
    $result = shell_exec($command);

    if ($result === null) {
        die('Error creating symlink.');
    }
    // ln -s /home/u971422264/domains/akad.in/public_html/storage/app/public /home/u971422264/domains/akad.in/public_html/public/storage
    echo 'Symlink process successfully completed';
});
