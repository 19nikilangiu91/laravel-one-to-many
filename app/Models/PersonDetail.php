<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonDetail extends Model
{
    use HasFactory;

    protected $fillable = [

        'phone',
        'address',
        'avatar',
    ];

    // 3) Dichiaro la relazione inversa tra "PersonDetail" e "Person"
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}