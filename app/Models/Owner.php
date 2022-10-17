<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'owners';
    protected $primaryKey = 'owner_id';

    public $timestamps = true;

    protected $fillable = [
        'owner_email',
        'owner_firstname',
        'owner_lastname',
        'owner_password',
        'owner_mobile',
    ];

    protected $hidden = [
        'owner_password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword() {
        return $this->owner_password;
    }
}
