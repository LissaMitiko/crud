<?php

use App\Http\Controllers\PostagemController;
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
    return view('welcome');
});

Route::get('/index', [PostagemController::class, 'index'])->name('post.home');

Route::get('/create',[PostagemController::class, 'create'])->name('post.create'); //Aqui indica que ao acessar o '/create' dentro do nosso Controller ele vai acessar o metodo create

Route::post('/store', [PostagemController::class, 'store'])->name('post.store');

Route::get('/index/{id}', [PostagemController::class, 'show'])->name('post.show');

Route::delete('/index/{id}', [PostagemController::class,'destroy'])->name('post.destroy');

Route::get('/edit/{id}', [PostagemController::class, 'edit'])->name('post.editar');

Route::put('/index/{id}',[PostagemController::class, 'update'])->name('post.update');
