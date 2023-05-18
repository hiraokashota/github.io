<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('task_name')->length(8);
            $table->integer('status_flg');
            $table->softDeletes();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
