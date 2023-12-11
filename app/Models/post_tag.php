<?php

namespace App\Models;

use Faker\Core\Blood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class post_tag extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(post::class);
    }
    public function tag()
    {
        return $this->belongsTo(tag::class);
    }
}
