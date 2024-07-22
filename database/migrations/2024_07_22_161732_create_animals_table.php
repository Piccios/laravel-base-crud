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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('specie', 50);
            $table->string('razza', 80)->nullable;
            $table->integer('eta', 10)->nullable;
            $table->decimal('peso', 5, 2)->nullable;
            $table->integer('sesso', 15);
            $table->string('url_img')->nullable;
            $table->text('note')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
