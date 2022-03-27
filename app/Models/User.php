<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'user_alumni';
    protected $fillable = [
        'std_id',
        'prefix',
        'gen_id',
        'firstname',
        'lastname',
        'nickname',
        'gender',
        'birthdate',
        'tel_number',
        'email',
        'password',
        'blood_type',
        'image_profile',
    ];

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function career() {
        return $this->hasOne(Career::class);
    }
}