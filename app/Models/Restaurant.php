<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function owner() {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function booking() {
        return $this->hasMany(Booking::class, 'restaurant_id');
    }
}
