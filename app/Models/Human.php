<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Human extends Model
{
    use HasFactory;

    // public function buyers()
    // {
    //     return $this->hasMany(Buyer::class);
    // }

    public $fillable = ['nama', 'username', 'alamat', 'email', 'password'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
