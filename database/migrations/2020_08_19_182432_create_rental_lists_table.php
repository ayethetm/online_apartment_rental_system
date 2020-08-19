<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('photo');
            $table->unsignedBigInteger('type_id');  
            $table->foreign('type_id')
              ->references('id')->on('types')
              ->onDelete('cascade');
            $table->integer('monthly_fees');
            $table->double('length');
            $table->double('width');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->unsignedBigInteger('township_id');  
            $table->foreign('township_id')
              ->references('id')->on('townships')
              ->onDelete('cascade');
            $table->integer('contact_phone_no');
            $table->text('description');
            $table->unsignedBigInteger('user_id');  
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
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
        Schema::dropIfExists('rental_lists');
    }
}
