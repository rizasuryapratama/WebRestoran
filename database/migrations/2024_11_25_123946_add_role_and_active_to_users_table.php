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
        Schema::table('users', function (Blueprint $table) {
            Schema::create('users', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->string('name'); // Nama pengguna
                $table->string('email')->unique(); // Email unik
                $table->timestamp('email_verified_at')->nullable(); // Tanggal verifikasi email (opsional)
                $table->string('password'); // Password
                $table->string('role')->default('Guest'); // Role pengguna, default 'Guest'
                $table->integer('active')->default(0); // Status aktif: 0 = Tidak Aktif, 1 = Aktif
                $table->rememberToken(); // Token untuk "remember me"
                $table->timestamps(); // Kolom created_at dan updated_at
            });
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
