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

    $ans = $this->confirm('Do you want to seed the shield and assign role ?');
    if ($ans) {
        try {
            Artisan::call('shield:generate', ['--all' => true]);
            Artisan::call('shield:super-admin');
            $this->alert('Role assigned to the super admin.');
            $this->table(['name', 'email'], [
                User::where('designation', 'super_admin')->first()->only(['name', 'email'])
            ]);
        } catch (\Exception $e) {
            $this->error('Shield generation or role assignment failed.');
        }
    } else {
        $this->alert('Shield Seeding Skipped. You will be unable to log in to the admin panel.');
    }
})->purpose('Run the necessary commands to setup the database');

