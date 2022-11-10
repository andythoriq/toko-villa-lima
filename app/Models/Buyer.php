<?php

namespace App\Models;

use App\Models\Human;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory;

    public function human()
    {
        return $this->belongsTo(Human::class);
    }
}
