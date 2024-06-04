<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeaponController;
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

   
    return view('welcome');
})->name('welcome');









//CHARACTERS//
Route::middleware('auth')->group(function () {
    //WEAPONS

    //INDEX
    Route::get('/weapons', [WeaponController::class, 'index'])->name('weapons.index');
    //CREATE
    Route::get('/weapons/create', [WeaponController::class, 'create'])->name('weapons.create');
    //SHOW
    Route::get('/weapons/{weapon}', [WeaponController::class, 'show'])->name('weapons.show');
    //STORE
    Route::get('/weapons',[WeaponController::class, 'store'])->name('weapons.store');


    // INDEX
    Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
    // CREATE
    Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
    // SHOW
    Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');
    // STORE
    Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
    // EDIT
    Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
    // UPDATE
    Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');
    // DESTROY
    Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
