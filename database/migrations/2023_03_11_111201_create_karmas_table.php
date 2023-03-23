<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karmas', function (Blueprint $table) {
            $table->id();
            $table->integer("first_number");
            $table->integer("second_number");
            $table->integer("third_number");
            $table->text("in_previous_life");
            $table->text("in_present_life");
            $table->text("less_and_rec");
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
        Schema::dropIfExists('karmas');
    }
};
