<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
    protected function title():Attribute
    {
        return new Attribute(
            get: function (){
                return $this->country.' , '.$this->city.' , '.$this->airport;
            }
        );
    }
}
