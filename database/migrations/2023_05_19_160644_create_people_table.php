<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->string('full_name')->nullable();
            $table->string('dni')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->smallInteger('status')->nullable()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
