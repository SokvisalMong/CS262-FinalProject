<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['cuisines'] ?? false) {
            $query->where('cuisines', 'like', '%'. request('cuisines') . '%');
        }
        if($filters['dress_code'] ?? false) {
            $query->where('dress_code', 'like', '%' . request('dress_code') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    public function owner() {
        return $this->belongsTo(Owner::class);
    }

    public function booking() {
        return $this->hasMany(Booking::class, 'restaurant_id');
    }
}
