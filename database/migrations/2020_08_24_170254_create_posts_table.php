<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('photo');
            $table->integer('monthly_fees');
            $table->double('length');
            $table->double('width');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->text('description');
            $table->unsignedBigInteger('type_id');  
            $table->foreign('type_id')
              ->references('id')->on('types')
              ->onDelete('cascade');
            $table->unsignedBigInteger('township_id');  
            $table->foreign('township_id')
              ->references('id')->on('townships')
              ->onDelete('cascade');
           
            $table->unsignedBigInteger('user_id');  
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->integer('status');
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
        Schema::dropIfExists('posts');
    }
}
