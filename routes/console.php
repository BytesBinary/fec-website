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
        $user = User::where('designation', 'super_admin')->first()->only(['id','name', 'email']);
        Artisan::call('shield:generate', ['--all' => true,'--panel' => 'user']);
        Artisan::call('shield:super-admin', ['--user' => $user['id']]);
        $this->alert('Role assigned to the super admin.');
        $this->table(['id','name', 'email'], [
           $user
        ]);
    } else {
        $this->alert('Shield Seeding Skipped. You will be unable to log in to the admin panel.');
    }
})->purpose('Run the necessary commands to setup the database');

