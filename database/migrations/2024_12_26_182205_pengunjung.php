<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
{
    Schema::create('pengunjung', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('nama');
        $table->integer('usia');
        $table->string('asal');
        $table->string('kewarganegaraan');
        $table->timestamp('tanggal_pengunjung_diinput')->useCurrent();
        $table->timestamps(); // Kolom created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
