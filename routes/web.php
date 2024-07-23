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

Route::get('/home', [AnimalController::class, 'index']);

Route::resource('animals', AdminAnimalController::class);

// Route::get('/animals', [AdminAnimalController::class, 'index'])->name('admin.animals.index');
// Route::get('/animals/{id}', [AdminAnimalController::class, 'show'])->name('admin.animals.show');

