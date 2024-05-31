<?php

use App\Models\Weapon;
use App\Http\Controllers\CharacterController;
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

    $weapons = Weapon::all();
    return view('welcome', compact('weapons'));
});

// INDEX
Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
// CREATE
Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
// SHOW
Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');
// STORE
Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
// EDIT
// Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
// UPDATE
// Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');
// DESTROY
// Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');
