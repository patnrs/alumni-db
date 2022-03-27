<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'std_id',
        'house_number',
        'village_number',
        'alley',
        'sub_district',
        'district',
        'province',
        'zipcode',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
