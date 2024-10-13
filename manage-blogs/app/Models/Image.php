<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'url',
        'alt',
        'is_active',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
