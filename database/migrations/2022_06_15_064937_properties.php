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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('type', ['apartment', 'house', 'flat share']);
            $table->enum('purpose', ['sale', 'rent']);
            $table->integer('price');
            $table->enum('location',['Strassen', 'Kirchberg', 'Hollerich', 'Belair', 'Gare']);
            $table->integer('house_number');
            $table->string('street_name', 255);
            $table->integer('post_code');
            $table->date('date_avaliable');
            $table->integer('bedrooms');
            $table->float('bathrooms', 3, 2);
            $table->boolean('parking');
            $table->boolean('children');
            $table->boolean('pets');
            $table->text('description');
            $table->string('pictures', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
