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
        Schema::create('formfields', function (Blueprint $table) {
            $table->id();
            $table->string('form_id');
            $table->boolean('system')->default(false);
            $table->integer('sequence')->default(0);
            $table->string('caption');
            $table->string('default_value')->nullable();
            $table->string('type');
            $table->boolean('required')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formfields');
    }
};
