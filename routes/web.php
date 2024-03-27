<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CharacterController;
use App\Models\Item;
use App\Models\Character;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ItemController::class, 'index'])->name('home');

Route::resource("characters", CharacterController::class);
Route::get("/characters", [CharacterController::class, 'index'])->name('characters.index');
Route::get("/characters/create", [CharacterController::class, 'create'])->name('characters.create');
Route::get("/characters/{character}", [CharacterController::class, 'show'])->name('characters.show');
Route::post("/characters", [CharacterController::class, 'store'])->name('characters.store');
Route::get("/characters/{character}/edit", [CharacterController::class, 'edit'])->name('characters.edit');
Route::patch("/characters/{character}", [CharacterController::class, 'update'])->name('characters.update');
Route::delete("/characters/{character}", [CharacterController::class, 'destroy'])->name('characters.destroy');






