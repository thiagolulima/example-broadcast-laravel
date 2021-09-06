<?php

use App\Events\channelPresenca;
use App\Events\channelPrivado;
use Illuminate\Support\Facades\Route;
use App\Events\channelPublico;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ControlerUser;
use App\Models\User;
use App\Notifications\notificaBroadcasting;
use Illuminate\Support\Facades\Auth;


// Aula Notificacao Por broadcast
Route::get('notifica.broadcast/{mgs}', function($msg){
    $user = User::find(Auth::user()->id) ;
    $user->notify(new notificaBroadcasting($msg));
});
// Fim Aula Notificacao Por broadcast


// Aulas Broadcast em real time
Route::get('broadcast/{msg}', function($msg){
    broadcast(new channelPublico($msg));
});
Route::get('presenca/{msg}', function($msg){
    broadcast(new channelPresenca($msg));
});
Route::get('private/{id}/{msg}', function($id,$msg){
    $user = User::find($id);
    broadcast(new channelPrivado($msg, $user));
});
// Fim  Aulas Broadcast em real time


// Aulas sobre eventos
Route::get('lista.produtos',[ProdutoController::class , 'index'] )->name('lista.produtos');
Route::get('detalhe.produto/{id}',[ProdutoController::class , 'detalhe'] )->name('detalhe.produto');
// Fim  Aulas sobre eventos

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
