<?php

namespace App\Listeners;

use App\Events\EventoNavegacao;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContadorNavegacao implements ShouldQueue
{
    public $connection = 'database';
    public $delay = 20;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EventoNavegacao  $event
     * @return void
     */
    public function handle(EventoNavegacao $event)
    {
        $event->produto->qtde_acessos++;
        $event->produto->save();
    }
}
