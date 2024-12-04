<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;

Route::middleware('api')->group(function () {
    Route::resource('items', ItemController::class)->except(['create', 'edit']);
});
