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

Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
