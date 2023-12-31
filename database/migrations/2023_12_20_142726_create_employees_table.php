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
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->foreignId('department_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->integer('salary')->nullable();
            $table->timestamp('hire_date')->nullable();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
