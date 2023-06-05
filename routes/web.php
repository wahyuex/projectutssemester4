<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/', [spesialView::class,'index']);
Route::get('/', function () {
    return view('preload');
});
Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::resource('project', ProjectController::class);

Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
