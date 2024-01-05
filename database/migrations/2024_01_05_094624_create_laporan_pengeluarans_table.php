<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPengeluaransTable extends Migration
{
    public function up()
    {
        Schema::create('laporan_pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Menambahkan kunci asing
            $table->decimal('total_pengeluaran', 10, 2);
            $table->date('tanggal_laporan');
            $table->text('catatan_laporan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_pengeluarans');
    }
}

