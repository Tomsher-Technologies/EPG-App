<?php

use App\Models\Location\Package;
use App\Models\User;
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
            $table->foreignIdFor(User::class);
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->dateTime('last_used')->nullable();
            $table->dateTime('first_used')->nullable();
            $table->decimal('total_earned', $precision = 8, $scale = 2);
            $table->decimal('total_redeemed', $precision = 8, $scale = 2);
            $table->foreignIdFor(Package::class);
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
