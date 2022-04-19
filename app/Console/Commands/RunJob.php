<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:write';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command adds a log entry.';

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
        info('Hello from the log:write command');
    }
}
