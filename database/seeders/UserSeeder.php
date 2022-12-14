<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Bouncer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(50)->create();
        $users = User::where('id', '!=' , 1 )->get();
        foreach($users as $user){
            Bouncer::assign('receptionist')->to($user);
        }
    }
}
