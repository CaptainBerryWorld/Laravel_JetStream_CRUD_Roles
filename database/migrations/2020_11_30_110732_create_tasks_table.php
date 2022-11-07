<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id');
            // $table->foreign('user_id')->references('users')->on('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
            // $table->foreignId('user_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
