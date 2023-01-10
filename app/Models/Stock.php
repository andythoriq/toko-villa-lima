<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Stock extends Model
{
    use HasFactory;

    // TODO kapan-kapan menggunakan soft deletes
    // use SoftDeletes;

    protected $table = 'stocks';
    protected $fillable = ['nama', 'persediaan', 'deskripsi', 'gambar', 'slug'];
    public function users() {
        return $this->belongsToMany(Product::class, 'products');
    }
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}