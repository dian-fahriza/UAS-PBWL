<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";

    protected $primaryKey = "trans_id";

    protected $guarded = [];
    // ...

    // Definisikan hubungan dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'trans_user_id');
    }

    // Definisikan hubungan dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'trans_cat_id');
    }



   
}
