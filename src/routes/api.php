<?php
use Illuminate\Support\Facades\Route;

Route::get('vitals', \Jumppeak\Vitals\Http\Controllers\VitalsController::class);
