<?php

namespace Database\Seeders;

use App\Models\Member\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::factory()->count(50)->create();
    }
}