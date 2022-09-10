<?php

use App\Models\Location\Location;
use App\Models\Location\LocationCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->foreignIdFor(LocationCategory::class)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_categories');
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('location_category_id');
            $table->dropColumn('location_category_id');
        });
    }
}
