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
        Schema::create('personal_paids', function (Blueprint $table) {
            $table->id();
            $table->integer("number");
            $table->text("energy_name");
            $table->text("text");
            $table->text("pod_1");
            $table->text("pod_2");
            $table->text("pod_3");
            $table->text("pod_4");
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
        Schema::dropIfExists('personal_paids');
    }
};
