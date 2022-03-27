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
        Schema::create('generation', function (Blueprint $table) {
                $table->id();
                $table->string('batch', 6)->unique();
                $table->string('gen_name');
                $table->timestamps();
            });

        Schema::create('prefixID', function (Blueprint $table) {
                $table->id();
                $table->string('prefix_name');
                $table->timestamps();
            });
        
        Schema::create('blood_type', function (Blueprint $table) {
                $table->id();
                $table->string('blood_type');
            });
        
        Schema::create('gender', function (Blueprint $table) {
                $table->id();
                $table->string('gender_type');
            });

        Schema::create('user_alumni', function (Blueprint $table) {
                $table->string('std_id', 11)->primary();
                $table->unsignedBigInteger('gen_id');
                $table->foreign('gen_id')->references('id')->on('generation');
                $table->unsignedBigInteger('prefix');
                $table->foreign('prefix')->references('id')->on('prefixID');
                $table->string('firstname');
                $table->string('lastname');
                $table->string('nickname');
                $table->unsignedBigInteger('gender');
                $table->foreign('gender')->references('id')->on('gender');
                $table->date('birthdate');
                $table->string('tel_number');
                $table->string('email')->unique();
                $table->string('password');
                $table->unsignedBigInteger('blood_type');
                $table->foreign('blood_type')->references('id')->on('blood_type');
                $table->binary('image_profile')->nullable();
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
        Schema::dropIfExists('user_alumni');
        Schema::dropIfExists('generation');
    }
};
