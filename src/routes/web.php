<?php

use Ashofiq\LogViewer\Controllers\LogViewerController;
use Illuminate\Support\Facades\Route;

Route::get('log', [LogViewerController::class, 'index']);