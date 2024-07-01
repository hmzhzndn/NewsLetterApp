<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/newsletters', [NewsletterController::class, 'index']);
