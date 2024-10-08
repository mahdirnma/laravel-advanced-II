<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'type',
        'airline',
        'seat',
        'time',
        'location_id',
        'user_id',
        'is_active',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected function title():Attribute
    {
        return new Attribute(
            get: function (){
                return 'Ticket'.$this->id.'_'.$this->seat.$this->airline.'_'.$this->type;
            }
        );
    }
}
