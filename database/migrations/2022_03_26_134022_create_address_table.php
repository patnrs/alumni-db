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
        Schema::create('address', function (Blueprint $table) {
            $table->string('std_id', 11);
            $table->foreign('std_id')->references('std_id')->on('user_alumni');
            $table->string('house_number');
            $table->string('village_number');
            $table->string('alley');
            $table->string('sub_district');
            $table->string('district');
            $table->string('province');
            $table->string('zipcode');
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
        Schema::dropIfExists('address');
    }
};
