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
    Schema::create('vga', function (Blueprint $table) {
        $table->id('kodevga');
        $table->string('merkvga', 30);
        $table->integer('stockvga');
        $table->char('tersedia', 1);
        $table->timestamps();
    });
}   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vga');
    }
};
