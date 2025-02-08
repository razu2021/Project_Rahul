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
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('banner_id');
            $table->string('banner_heading',length: 255)->nullable();
            $table->string('banner_title')->nullable();
            $table->text('banner_caption')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_url',255)->nullable();
            $table->string('image_name',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->string('creator')->nullable();
            $table->string('editor')->nullable();
            $table->integer('status')->default(1);
            $table->integer('public_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
