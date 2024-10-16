<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;
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

Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
*/
Route::get('tarefa/exportacao', [TarefaController::class, 'exportacao'])->name('tarefa.exportacao');
Route::resource('tarefa', TarefaController::class)->middleware('verified');

Route::get("/mensagem-test", function () {
    return new MensagemTesteMail();
});
