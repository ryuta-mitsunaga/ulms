<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_lecture', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('lecture_id');
            $table->date('register_date')->nullable();
            $table->integer('period')->nullable();
            $table->integer('term_type')->nullable()->comment('前期: 1, 後期: 2');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_lecture');
    }
};
