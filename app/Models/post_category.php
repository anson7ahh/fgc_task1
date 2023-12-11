<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class post_category extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(post::class);
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
