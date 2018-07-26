<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WhatADay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whataday {today}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Says which day is today.';

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
     * @return mixed
     */
    public function handle()
    {
        $userId = $this->argument('today');
        $this->comment("Today is an awesome day!");
    }
}
