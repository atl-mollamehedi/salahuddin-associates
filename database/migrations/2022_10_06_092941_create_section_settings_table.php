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
        Schema::create('section_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(1);
            $table->string('name');
            // $table->integer('banner_section_status')->default(1);
            // $table->integer('about_section_status')->default(1);
            // $table->integer('skill_section_status')->default(1);
            // $table->integer('achievment_section_status')->default(1);
            // $table->integer('service_section_status')->default(1);
            // $table->integer('resume_section_status')->default(1);
            // $table->integer('portfolio_section_status')->default(1);
            // $table->integer('review_section_status')->default(1);
            // $table->integer('blog_section_status')->default(1);
            // $table->integer('contact_section_status')->default(1);
            // $table->integer('footer_section_status')->default(1);
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
        Schema::dropIfExists('section_settings');
    }
};
