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
        Schema::create('inqueries', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->timestamp('date');
            $table->time('start');
            $table->time('end');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('subject');
            $table->longText('message');
            $table->string('view_status')->default('unread');
            $table->string('status')->default('normal');
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
        Schema::dropIfExists('inqueries');
    }
};
