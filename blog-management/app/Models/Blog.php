<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'body',
        'main_pic',
        'category_id',
        'is_active',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function pics()
    {
        return $this->belongsToMany(Pic::class);
    }

}
