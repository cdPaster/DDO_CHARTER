<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained()->cascadeOnDelete();
            $table->string('service_name');        // required
            $table->text('service_description')->nullable();
            $table->json('service_type')->nullable();
            $table->string('classification')->nullable();
            $table->string('who_may_avail')->nullable();
            $table->string('fees_required')->nullable();
            $table->string('processing_time')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
