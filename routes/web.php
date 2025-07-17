<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Models\Certificates;
use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function() {
    Mail::raw('This is a test email from Dev.', function($message) {
        $message->to('mohammed.i.alabdullh@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent!';
});



Route::get('/', [CertificateController::class, 'index'])->name('certificates.index');
Route::get('/certificates/{id}', [CertificateController::class, 'show'])->name('certificates.show');
Route::get('/certificates', [CertificateController::class, 'create'])->name('certificates.create');
Route::post('/certificates/add', [CertificateController::class, 'store'])->name('certificates.store');
Route::get('/certificates/{id}/edit', [CertificateController::class, 'edit'])->name('certificates.edit');
Route::put('/certificates/{id}/update', [CertificateController::class, 'update'])->name('certificates.update');
Route::delete('/certificates/{certificateId}', [CertificateController::class, 'destroy'])->name('certificates.destroy');
