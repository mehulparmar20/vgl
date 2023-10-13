<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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



//UserController
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/', [UserController::class, 'index'])->name('welcome');
// Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('custom-login'); 
Route::get('register', [UserController::class, 'register'])->name('user.register');
Route::post('custom-register', [UserController::class, 'customregister'])->name('custom-register'); 
Route::get('logout', [UserController::class, 'logout'])->name('log-out');
//Resumecontroller
Route::get('resume-create', [ResumeController::class,
 'create'])->name('resume.create');

Route::middleware(['auth'])->group(function () {
Route::get('resume', [ResumeController::class, 'index'])->name('resume.index');
Route::post('resume-store', [ResumeController::class, 'store'])->name('resume-store');
Route::get('view/{id}', [ResumeController::class, 'view'])->name('view');
// Route::get('resume-edit', [ResumeController::class, 'edit'])->name('resume.edit');
// Route::post('resume-update', [ResumeController::class, 'update'])->name('resume-update');
// Route::get('resume-delete', [ResumeController::class, 'delete'])->name('resume-delete'); 

Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generatePDF');
// Route::get('download/{id}', [PDFController::class, 'download'])->name('download');
});