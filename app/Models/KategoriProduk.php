<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'nama'
    ];
    // menerima relasi one to many dengan table produk
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
