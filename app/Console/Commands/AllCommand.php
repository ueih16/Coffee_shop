<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Begin Fresh Migrate!');
        $this->call('migrate:fresh');
        $this->info('Done Fresh Migrate!');
        $this->info('Begin Seed!');
        $this->call('db:seed');
        $this->info('Done Seed!');
        $this->info('Begin Creating Permissions!');
        $this->call('permit');
        $this->info('Done Creating Permissions!');
    }
}
