<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DebugCommand extends Command
{
    protected $signature = 'debug';
    protected $description = 'Command description';

    public function handle()
    {
        dd('ok');
    }
}
