<?php

use App\Models\Weapon;
use App\Http\Controllers\CharacterController;
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

//WEAPONS

//INDEX
Route::get('/weapons', [WeaponController::class, 'index'])->name('weapons.index');
//CREATE
Route::get('/weapons/create', [WeaponController::class, 'create'])->name('weapons.create');
//SHOW
Route::get('/weapons/{weapon}', [WeaponController::class, 'show'])->name('weapons.show');
//STORE
Route::get('/weapons',[WeaponController::class, 'store'])->name('weapons.store');







//CHARACTERS//

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
