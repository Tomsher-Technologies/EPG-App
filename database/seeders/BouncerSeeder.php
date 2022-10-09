<?php

namespace Database\Seeders;

use App\Models\User;
use Bouncer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // php artisan db:seed --class=BouncerSeeder

    public function run()
    {
        
        // $admin = Bouncer::role()->firstOrCreate([
        //     'name' => 'superadmin',
        //     'title' => 'Administrator',
        // ]);
        // $admin = Bouncer::role()->firstOrCreate([
        //     'name' => 'receptionist',
        //     'title' => 'Receptionist',
        // ]);
        // $admin = Bouncer::role()->firstOrCreate([
        //     'name' => 'member',
        //     'title' => 'Member',
        // ]);
        
        //  $user  = User::create([
        //     'name' => 'it@raffles.com',
        //     'email' => 'it@raffles.com',
        //     'password' => Hash::make('it@raffles.com'),
        //     'status' => 1,
        //     'location_id' => 0
        // ]);
        // Bouncer::assign('superadmin')->to($user);
        
        // $user  = User::create([
        //     'name' => 'maz@raffles.com',
        //     'email' => 'maz@raffles.com',
        //     'password' => Hash::make('maz@raffles.com'),
        //     'status' => 1,
        //     'location_id' => 0
        // ]);
        // Bouncer::assign('superadmin')->to($user);
        
        // Bouncer::allow('superadmin')->everything();
        
    }
}
