<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'career';
    protected $fillable = [

        'std_id',
        'career_status',
        'career',
        'workplace',
        'workplace_sub_district',
        'workplace_district',
        'workplace_province',
        'workplace_zipcode',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
