<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailController;
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

Route::get('send-mail', [MailController::class, 'index']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('custom-login'); 
Route::get('register', [UserController::class, 'register'])->name('user.register');
Route::post('custom-register', [UserController::class, 'customregister'])->name('custom-register'); 
Route::get('logout', [UserController::class, 'logout'])->name('log-out');

//Resumecontroller
Route::middleware(['auth'])->group(function () {
// Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('resume', [ResumeController::class, 'index'])->name('resume.index');
Route::get('view/{id}', [ResumeController::class, 'view'])->name('view');
Route::get('resume-edit/{id}', [ResumeController::class, 'edit'])->name('resume.edit');
Route::post('resume-update/{id}', [ResumeController::class, 'update'])->name('resume-update');
Route::get('resume-delete/{id}', [ResumeController::class, 'delete'])->name('resume-delete'); 

Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generatePDF');
// Route::get('download/{id}', [PDFController::class, 'download'])->name('download');

//JobController
Route::get('job-create', [JobController::class,'create'])->name('job.create');
Route::post('job-store', [JobController::class, 'store'])->name('job-store');
Route::get('job-index', [JobController::class, 'index'])->name('job.index');
Route::get('job-edit/{id}', [JobController::class, 'edit'])->name('job.edit');
Route::post('job-update/{id}', [JobController::class, 'update'])->name('job-update');
Route::get('job-delete/{id}', [JobController::class, 'delete'])->name('job-delete'); 
Route::get('view2', [JobController::class,'view2'])->name('job.view2');
});
Route::get('view1/{id}', [JobController::class, 'view1'])->name('job.view1');
Route::get('/', [JobController::class, 'frontindex'])->name('welcome');
Route::get('/vgl', [JobController::class, 'frontindex'])->name('vgl');
Route::get('resume-create', [ResumeController::class,'create'])->name('resume.create');
Route::post('resume-store', [ResumeController::class, 'store'])->name('resume-store');

Route::get('term', [DashboardController::class,'term'])->name('term');
// Route::get('city', [DashboardController::class,'index'])->name('city');
// Route::post('/getState', [DashboardController::class,'getState']);
// // Route::post('/getdistrict', [DashboardController::class,'getDistrict']);
// Route::post('/getCity', [DashboardController::class,'getCity']);