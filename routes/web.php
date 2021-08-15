<?php

use App\Http\Controllers\ListaRDiarias;
use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', ListaRDiarias::class);
Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
Auth::routes();
