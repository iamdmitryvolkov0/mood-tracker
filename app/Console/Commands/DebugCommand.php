<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JetBrains\PhpStorm\NoReturn;

class DebugCommand extends Command
{
    protected $signature = 'debug';
    protected $description = 'Command description';
    #[NoReturn] public function handle(): void
    {
        dd('ok');
    }
}
