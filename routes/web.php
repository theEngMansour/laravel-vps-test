<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPdf\Facades\Pdf;

Route::get('/', function () {
    return Pdf::view('pdfs.invoice')
        ->format('a4')
        ->name('your-invoice.pdf');
});
