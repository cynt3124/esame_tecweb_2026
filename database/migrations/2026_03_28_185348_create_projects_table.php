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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('site_name')->nullable();

            #$table->unsignedBigInteger('department_id')->nullable();
            #$table->foreign('department_id')->references('id')->on('departments');
            
            // TASK 3 — Attiva la cancellazione a cascata: se un Department viene eliminato,
            $table->foreignId('department_id')
                  ->constrained()
                  ->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
