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
        Schema::create('lecture', function (Blueprint $table) {
            $table->id();
            $table->integer('lecture_type');
            $table->string('title');
            $table->string('description');
            $table->json('mon_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('tue_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('wed_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('thu_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('fri_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('sat_period')->nullable()->comment('[1, 2, 3, 4, 5]');
            $table->json('sun_period')->nullable()->comment('[1, 2, 3, 4, 5]');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture');
    }
};
