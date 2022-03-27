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
        Schema::create('career_status', function (Blueprint $table) {
            $table->id();
            $table->string('career_status');
            $table->timestamps();
        });
        
        Schema::create('career', function (Blueprint $table) {
            $table->string('std_id', 11);
            $table->foreign('std_id')->references('std_id')->on('user_alumni');
            $table->unsignedBigInteger('career_status');
            $table->foreign('career_status')->references('id')->on('career_status');
            $table->string('career')->nullable();
            $table->string('workplace')->nullable();
            $table->string('workplace_sub_district')->nullable();
            $table->string('workplace_district')->nullable();
            $table->string('workplace_province')->nullable();
            $table->string('workplace_zipcode')->nullable();
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
        Schema::dropIfExists('career_status');
        Schema::dropIfExists('career');
    }
};
