<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\partnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;



    Route::get('/', [HomeController::class,"home"]);
    Route::get('/about', [HomeController::class,"about"]);
    Route::get('/testi', [HomeController::class,"testi"]);
    Route::get('/con', [HomeController::class,"contact"]);
    Route::get('/login', [HomeController::class,"login"])->name('login');
    Route::post('/login', [HomeController::class,"signin"]);
    Route::get('/register', [HomeController::class,"register"]);
    Route::post('/create', [HomeController::class,"create"]);
    Route::get('/b', [HomeController::class,"book"]);





    Route::group(['middleware' => 'auth', 'userAkses:company'], function () {
        Route::get('/company', [ClientController::class, "company"]);
        Route::resource('/partner', partnerController::class);
        Route::resource('/company', partnerController::class);
        Route::get('/company', [partnerController::class, 'index']);
        Route::post('/partner/store', [partnerController::class, 'store'])->name('partner.store');


    });

    Route::get('/client', [ClientController::class, "client"])->middleware(['auth', 'userAkses:client']);
    Route::get('/company', [ClientController::class, "company"])->middleware(['auth', 'userAkses:company']);
    Route::post('/company', [ClientController::class,"company"]);
    Route::get('/logout', [HomeController::class, "logout"]);

    Route::group(['middleware' => 'auth', 'userAkses:client'], function () {
       
        Route::get('/profile', [ProfileController::class, "index"]);
        Route::get('/profile/create', [ProfileController::class, "create"]);
        Route::get('/profile/update', [ProfileController::class, "update"]);
        Route::get('/booking', [ReservationController::class, 'index'])->name('booking.index');;
        Route::get('/booking/create', [ReservationController::class, 'create']);
        Route::post('/booking', [ReservationController::class, 'store'])->name('booking.store');
        Route::resource('/booking', ReservationController::class);
       
        Route::post('/booking/status/{id}', [ReservationController::class, 'updateStatus'])->name('updateStatus');
        Route::get('/booking/payment-options/{reservationId}', [PaymentController::class, 'showPaymentOptions'])->name('showPaymentOptions');
        Route::post('/booking/create-bill/{reservationId}', [PaymentController::class, 'createBill'])->name('createBill');
        Route::get('/booking/bill/{reservationId}', [PaymentController::class, 'showBill'])->name('showBill');
        Route::resource('/profile', ProfileController::class);
    

    });


   