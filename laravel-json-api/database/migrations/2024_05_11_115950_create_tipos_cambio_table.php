<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tipos_cambio', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('valor_dolar', 8, 2);
            $table->decimal('valor_euro', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_cambio');
    }
};
