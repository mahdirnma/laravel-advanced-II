<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'price',
        'profit',
        'is_active',
    ];

    public function ingredients()
    {
        return $this->hasOne(Ingrediant::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
