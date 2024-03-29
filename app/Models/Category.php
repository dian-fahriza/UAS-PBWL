<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $primaryKey = "cat_id";

    protected $guarded = [];
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'trans_cat_id');
    }   
    
}
