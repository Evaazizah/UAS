<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('beranda');
});

Route::resource('tickets', TicketController::class);
