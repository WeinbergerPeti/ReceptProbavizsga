<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\KategoriakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceptekController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/receptek", [ReceptekController::class, "index"]);
Route::get("/receptek/{id}", [ReceptekController::class, "show"]);
Route::post("/receptek", [ReceptekController::class, "store"]);
Route::put("/receptek/{id}", [ReceptekController::class, "update"]);
Route::delete("/receptek/{id}", [ReceptekController::class, "destroy"]);

Route::get("/kategoriak", [KategoriakController::class, "index"]);
Route::get("/kategoriak/{id}", [KategoriakController::class, "show"]);
Route::post("/kategoriak", [KategoriakController::class, "store"]);
Route::put("/kategoriak/{id}", [KategoriakController::class, "update"]);
Route::delete("/kategoriak/{id}", [KategoriakController::class, "destroy"]);

Route::get("/kategoria_szures/{id}", [ReceptekController::class, "kategoriaraSzures"]);

require __DIR__.'/auth.php';
