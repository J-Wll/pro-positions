<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, "index"]);
// __invoke() inside so no array or function name needed
Route::get('/search', SearchController::class);


// Route::controller(RegisteredUserController::class. function(){

// });

// need to be a guest for these actions
Route::middleware("guest")->group(function(){
    Route::get("/register", [RegisteredUserController::class, "create"]);
    Route::post("/register", [RegisteredUserController::class, "store"]);
    Route::get("/login", [SessionController::class, "create"]);
    Route::post("/login", [SessionController::class, "store"]);
});

// need to be signed in to logout and etc
Route::post("/logout", [SessionController::class, "destroy"])->middleware("auth");
