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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100);
            $table->text('description');
            $table->text('thumb');
            $table->string('price', 6, 2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->json('artists');
            $table->json('writers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
