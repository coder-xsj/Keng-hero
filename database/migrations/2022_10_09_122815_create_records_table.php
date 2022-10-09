<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->comment('本用户')->default(0)->index();
            $table->string('title')->comment('王者名称')->nullable();
            $table->string('hero')->comment('所使用英雄')->nullable();
            $table->string('record')->comment('战绩');
            $table->string('record_image')->comment('战绩图');
            $table->string('remarks')->comment('备注');
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
        Schema::dropIfExists('records');
    }
}
