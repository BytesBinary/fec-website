<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

Artisan::command('db:set', function () {
    try {
        $this->info('Running migrate:fresh...');
        $this->call('migrate:fresh');
    } catch (\Exception $e) {
        $this->error('Migration failed first run `php artisan migrate`.If there is any error in the migration, just this command again.');
        return;
    }

    $this->info('Migrations completed successfully!');

    $this->alert('Setting up the database.');
    $this->call('db:seed');
    $this->info('Database seeding completed.');
})->purpose('Run the necessary commands to setup the database');

