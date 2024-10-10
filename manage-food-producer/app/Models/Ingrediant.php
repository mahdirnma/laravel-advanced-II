<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediant extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'price',
        'product_id',
        'is_active'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
