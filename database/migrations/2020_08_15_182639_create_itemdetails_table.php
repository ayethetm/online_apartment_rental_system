<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->integer('price');
            $table->text('description');
            $table->unsignedBigInteger('itemlist_id');  
            $table->foreign('itemlist_id')
              ->references('id')->on('itemlists')
              ->onDelete('cascade');
            $table->unsignedBigInteger('owner_id');  
            $table->foreign('owner_id')
              ->references('id')->on('owners')
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
        Schema::dropIfExists('itemdetails');
    }
}
