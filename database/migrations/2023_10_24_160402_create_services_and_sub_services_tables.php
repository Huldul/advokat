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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('url')->unique();

            $table->string('metatitle')->nullable();
            $table->string('metakey')->nullable();
            $table->string('metadescription')->nullable();

            $table->timestamps();
        });

        Schema::create('sub_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_id');
            $table->string('services_url');
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->timestamps();

            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('services_url')->references('url')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_services');
        Schema::dropIfExists('services');
    }
};
