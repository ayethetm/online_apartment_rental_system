<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itemdetail_id')->unique(); 
            $table->foreign('itemdetail_id')
              ->references('id')->on('itemdetails')
              ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');  
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->date('initial_rent_date');
            $table->date('final_rent_date');
            $table->integer('duration');
            $table->boolean('status');
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
        Schema::dropIfExists('rents');
    }
}
