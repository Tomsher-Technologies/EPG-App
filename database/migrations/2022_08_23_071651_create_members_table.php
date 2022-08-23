<?php

use App\Models\Location\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->dateTime('last_used')->nullable();
            $table->dateTime('first_used')->nullable();
            $table->decimal('total_earned', $precision = 8, $scale = 2);
            $table->decimal('total_redeemed', $precision = 8, $scale = 2);
            $table->foreignIdFor(Package::class);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
