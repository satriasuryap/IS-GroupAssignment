<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EncryptionController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/upload', function(){
    return view('upload');
});

Route::get('/encrypted', function(){
    return view('encrypted');
});

Route::get('/encrypt', function () {
    return view('encrypt');
});

Route::post('/encrypt/name', [EncryptionController::class, 'encryptName']);
Route::post('/decrypt/name', [EncryptionController::class, 'decryptName']);

Route::post('/encrypt/email', [EncryptionController::class, 'encryptEmail']);
Route::post('/decrypt/email', [EncryptionController::class, 'decryptEmail']);

Route::post('/encrypt/phone', [EncryptionController::class, 'encryptPhone']);
Route::post('/decrypt/phone', [EncryptionController::class, 'decryptPhone']);

Route::post('/encrypt/img', [EncryptionController::class, 'encryptImg']);
Route::post('/decrypt/img', [EncryptionController::class, 'decryptImg']);

Route::post('/encrypt/file', [EncryptionController::class, 'encryptFile']);
Route::post('/decrypt/file', [EncryptionController::class, 'decryptFile']);

Route::post('/encrypt/video', [EncryptionController::class, 'encryptVideo']);
Route::post('/decrypt/video', [EncryptionController::class, 'decryptVideo']);

Route::get('/encryptDES', function () {
    return view('encryptDES');
});

Route::post('/encryptDES/name', [EncryptionController::class, 'encryptNameDES']);
Route::post('/decryptDES/name', [EncryptionController::class, 'decryptNameDES']);


require __DIR__.'/auth.php';
