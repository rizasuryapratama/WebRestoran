<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void{Schema::create ('menu', function (Blueprint $table)

        {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->string('kategori');
            $table->rememberToken();
            $table->timestamps();
        });
        
        }
    
    
      public function down(): void{Schema::dropIfExists('menu');}
    
};
