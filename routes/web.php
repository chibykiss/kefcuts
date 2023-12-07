<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreBookingController;
use App\Http\Controllers\Webhook\HandleWeebhookController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('mail', function(){
    return view('mail.bookmail');
});

Route::post('paystack_webhook',HandleWeebhookController::class);
Route::get('/appointment', [AppointmentController::class,'index'])->name('appointment');
Route::post('/appointment', [AppointmentController::class,'getAvailableTime'])->name('appointment');
Route::post('check_time',[AppointmentController::class,'checkTimeAvailabilty'])->name('appointment.checktime');

Route::post('book', StoreBookingController::class)->name('booking.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
