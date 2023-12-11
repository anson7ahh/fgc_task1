<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class category extends Model
{
    use HasFactory;

    public function post_categories()
    {
        return $this->hasMany(post_tags::class);
    }
}
