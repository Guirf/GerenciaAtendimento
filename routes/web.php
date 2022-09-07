<?php

use App\Http\Controllers\ActionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Actions;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('livewire.actions');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [Actions::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/fila/login', [Actions::class, 'filaLogIn'])->name('fila/login');
Route::post('logar', [Actions::class, 'logIN']);

Route::post('/new', [ActionsController::class, 'new']);
Route::get('/ramais/add', [ActionsController::class, 'index']);


require __DIR__.'/auth.php';
