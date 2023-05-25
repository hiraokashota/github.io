<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goal_value')->length(4)->nullable();
            $table->integer('result_value')->length(4)->nullable();
            $table->string('memo',100)->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->string('alc_name1',20)->nullable();
            $table->string('alc_name2',20)->nullable();
            $table->string('alc_name3',20)->nullable();
            $table->string('alc_name4',20)->nullable();
            $table->integer('count1')->length(2)->nullable();
            $table->integer('count2')->length(2)->nullable();
            $table->integer('count3')->length(2)->nullable();
            $table->integer('count4')->length(2)->nullable();
            $table->integer('abv1')->length(2)->nullable();
            $table->integer('abv2')->length(2)->nullable();
            $table->integer('abv3')->length(2)->nullable();
            $table->integer('abv4')->length(2)->nullable();
            $table->integer('capacity1')->length(4)->nullable();
            $table->integer('capacity2')->length(4)->nullable();
            $table->integer('capacity3')->length(4)->nullable();
            $table->integer('capacity4')->length(4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
