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
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_lengkap');
            $table->string('gmail')->unique();
            $table->string('password');
            $table->timestamp('tanggal_akun_dibuat')->useCurrent();
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