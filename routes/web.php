<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/invoices/{item}', function ($item) {
    
//     return view('invoices', ["data" =>$offertes->$item]);
// });

Route::get('/', [InvoiceController::class, 'index']);

Route::get('/invoices/{id}', [InvoiceController::class, 'show']);