<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'body',
    ];

    // 4) Dichiaro la relazione inversa tra "Post" e "Person"
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}