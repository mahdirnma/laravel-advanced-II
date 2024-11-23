<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'km',
        'is_active',
    ];

    public function logs()
    {
        return $this->belongsToMany(Log::class);
    }
}
