<?php

namespace App\Models;

use App\Models\Human;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'jumlah', 'slug'];

    public function humans()
    {
        return $this->belongsToMany(Human::class);
    }

}
