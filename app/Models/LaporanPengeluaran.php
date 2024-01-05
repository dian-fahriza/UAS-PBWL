<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPengeluaran extends Model
{
    use HasFactory;
    protected $attributes = [
        'user_id' => null,
    ];
    protected $fillable = ['total_pengeluaran', 'tanggal_laporan', 'catatan_laporan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
