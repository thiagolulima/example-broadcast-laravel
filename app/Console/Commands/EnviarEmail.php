<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\EnviaEmailUser;
use App\Models\User;

class EnviarEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'envio:EnvioEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando Envia Email de Usuario Cadastrado';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::find(35);
        EnviaEmailUser::dispatch($user);
    }
}
