<?php

use App\Models\Location\Location;
use App\Models\Location\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_to_package', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Location::class);
            $table->foreignIdFor(Package::class);
            $table->decimal('points', $precision = 8, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_to_package', function (Blueprint $table) {
            $table->dropIfExists('location_to_package');
        });
    }
}
