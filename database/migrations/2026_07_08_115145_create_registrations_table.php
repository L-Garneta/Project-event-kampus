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
        Schema::create('registrations', function (Blueprint $table) {

            $table->id();

            $table->foreignId('event_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('nama_peserta');

            $table->string('email');

            $table->string('no_hp');

            $table->enum('asal_peserta', [
                'Mahasiswa Internal',
                'Peserta Umum'
            ]);

            $table->enum('status', [
                'Terdaftar',
                'Dibatalkan'
            ])->default('Terdaftar');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
