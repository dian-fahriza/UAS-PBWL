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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('trans_id'); 
            $table->unsignedBigInteger('trans_user_id');
            $table->unsignedBigInteger('trans_cat_id');
            $table->decimal('trans_jumlah', 10, 2);
            $table->text('trans_deskripsi')->nullable();
            $table->date('trans_tanggal_transaksi');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
