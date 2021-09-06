<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\EnviaEmailUser;
use App\Notifications\notificaTeste;
use App\Notifications\notificaUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\webpush;
use App\Notifications\notificacao;

class ControlerUser extends Controller
{
      public function salvaUser(Request $request)
      {
          $user = new User();
          $user->Email = $request->email;
          $user->password = bcrypt(123456);
          $user->name = $request->nome;
          $user->save();

          $usuarios = User::whereIn('id',['98','99'])->get();
          
          //$user->notify(new notificaTeste());
          Notification::send($usuarios, new notificaUser($user));

      }
      public function notifica()
      {
          $user = User::find(Auth::user()->id);
          $user->notify(new notificacao());
      }


}
