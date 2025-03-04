<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

// actions without auth
Route::get('/', [JobController::class, "index"]);
Route::get('/search', SearchController::class); // __invoke() controller inside so no array or function name needed
Route::get('/tags/{tag:name}', TagController::class); // using the name instead of default id. url having tag name is nicer
Route::get('employers/{employer:name}', [EmployerController::class, "show"]);

// need to be a guest for these actions
Route::middleware("guest")->group(function () {
    Route::get("/register", [RegisteredUserController::class, "create"]);
    Route::post("/register", [RegisteredUserController::class, "store"]);

    Route::get("/login", [SessionController::class, "create"])->name("login");
    Route::post("/login", [SessionController::class, "store"]);
});

// need to be signed in to logout and etc
Route::middleware("auth")->group(function () {
    Route::get("jobs/create", [JobController::class, "create"]);
    Route::post("jobs/create", [JobController::class, "store"]);

    Route::post("/logout", [SessionController::class, "destroy"])->middleware("auth");
});
