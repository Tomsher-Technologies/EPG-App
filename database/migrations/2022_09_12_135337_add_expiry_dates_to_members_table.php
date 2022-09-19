<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpiryDatesToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dateTime('purchase_date')->nullable()->after('first_used');
            $table->dateTime('expiry_date')->nullable()->after('purchase_date');
            $table->dropColumn('total_earned');
            $table->dropColumn('total_redeemed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('purchase_date');
            $table->dropColumn('expiry_date');
            $table->decimal('total_earned', $precision = 8, $scale = 2)->after('first_used');
            $table->decimal('total_redeemed', $precision = 8, $scale = 2)->after('total_earned');
        });
    }
}
