<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getpost()
    {
        return db::table('posts')->get();
    }
    public function post_categories(): HasMany
    {
        return $this->hasMany(Post_Category::class);
    }
    public function post_tags(): HasMany
    {
        return $this->hasMany(post_tag::class);
    }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return $post;
    }
}
