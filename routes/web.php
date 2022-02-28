<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
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

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'index'])->name('site.contato');

Route::prefix('/app')->name('app.')->group(function () {
    Route::get('/login', function () {
        return 'login';
    })->name('login');

    Route::get('/clientes', function () {
        return 'clientes';
    })->name('clientes');

    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('fornecedores');

    Route::get('/produtos', function () {
        return 'produtos';
    })->name('produtos');
});
