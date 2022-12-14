<?php

namespace Database\Seeders;

use App\Models\User;
use Bouncer;
use Illuminate\Database\Seeder;

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
        
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'superadmin',
            'title' => 'Administrator',
        ]);
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'receptionist',
            'title' => 'Receptionist',
        ]);
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'member',
            'title' => 'Member',
        ]);

        $user = User::whereId(1)->first();
        Bouncer::assign('superadmin')->to($user);
        Bouncer::allow('superadmin')->everything();
        
    }
}
