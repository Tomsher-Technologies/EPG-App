<?php

use App\Models\Benefits\BenefitCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BenefitCategory::class);
            $table->text('name');
            $table->integer('location_id')->nullable();
            $table->string('discount_type')->nullable()->comment('% off, Free');
            $table->integer('discount')->nullable();
            $table->string('validity_type')->nullable()->comment('Per year, per month, unlimited, limit');
            $table->integer('validity')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('benefits');
    }
}
