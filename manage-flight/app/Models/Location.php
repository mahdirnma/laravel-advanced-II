<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable=[
        'city',
        'country',
        'airport',
        'is_active'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
