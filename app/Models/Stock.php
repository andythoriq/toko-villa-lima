<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use HasFactory;

    // TODO kapan-kapan menggunakan soft deletes
    // use SoftDeletes;

    protected $table = 'stocks';
    protected $fillable = ['nama', 'persediaan', 'deskripsi', 'gambar', 'slug'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
