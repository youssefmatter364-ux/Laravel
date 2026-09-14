<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id');
            $table->string('address');

            $table->foreign('university_id')
                ->references('university_id')
                ->on('students')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_addresses');
    }
};