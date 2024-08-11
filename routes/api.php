<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::controller(SocialController::class)->prefix("socials")->group(function () {
    Route::get("/","all");
});
