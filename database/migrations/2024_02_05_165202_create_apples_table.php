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
        Schema::create('apples', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->date('appearance');
            $table->string('fall');
            $table->enum('status', ['висит на дереве','упало/лежит на земле','гнилое яблоко'])->default('висит на дереве');
            $table->integer('much_eat');
            $table->decimal('size');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apples');
    }
};
