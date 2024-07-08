<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuid;
class User extends Authenticatable
{
    use Uuid;
    use HasFactory, Notifiable;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $connection = 'mysql';

    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id','status','uuid'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
