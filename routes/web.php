<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf;

Route::get('/laravel-Pdf', function () {
    return Pdf::view('pdfs.invoice')
        ->format('a4')
        ->name('your-invoice.pdf');
});
Route::get('/browsershot', function () {
    Browsershot::url('https://example.com')
        ->setChromePath('/usr/bin/google-chrome') // or '/usr/bin/chromium' on Alpine
        ->save('example.pdf');
});