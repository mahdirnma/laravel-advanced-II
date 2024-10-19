<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'url',
        'alt',
        'is_active',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
