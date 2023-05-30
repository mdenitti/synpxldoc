<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // relation with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
