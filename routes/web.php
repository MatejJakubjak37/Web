<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Web\CronController;
use App\Mail\TestMail;

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

Route::get('/', [WebController::class, 'default'])->name('web');
Route::get('/kontakt', [WebController::class, 'contact'])->name('contact');
Route::get('/galeria', [WebController::class, 'gallery'])->name('gallery');
Route::get('/sluzby', [WebController::class, 'services'])->name('services');
Route::get('/certifikaty', [WebController::class, 'certificates'])->name('certificates');
Route::get('/onas', [WebController::class, 'about'])->name('about');
Route::post ('/send-mail',[MailController::class,'maildata'])->name('send_mail');


Route::get('/cron/{slug}', [CronController::class, 'run'])->name('cron-run');
