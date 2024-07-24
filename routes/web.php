<?php

use App\Http\Controllers\Admin\AdminAnimalController;
use App\Http\Controllers\AnimalController;
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

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/home', [AnimalController::class, 'index']);

// Route::resource('animals', AdminAnimalController::class);

Route::get('/', [AdminAnimalController::class, 'index'])->name('pages.home');
Route::get('/create', [AdminAnimalController::class, 'create'])->name('pages.create');
Route::post('/store', [AdminAnimalController::class, 'store'])->name('pages.store');
//rotta custom va sempre alla fine
Route::get('/{animal}', [AdminAnimalController::class, 'show'])->name('pages.show');
Route::get('{animal}/edit/', [AdminAnimalController::class, 'edit'])->name('pages.edit');
Route::put('{animal}',[AdminAnimalController::class, 'update'])->name('pages.update');
Route::delete('{animal}',[AdminAnimalController::class, 'destroy'])->name('pages.destroy');
