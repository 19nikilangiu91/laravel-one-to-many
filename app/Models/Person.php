<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'mail',
    ];

    // 3) Dichiaro la relazione diretta tra "Person" e "PersonDetail"
    public function personDetail()
    {
        return $this->hasOne(PersonDetail::class);
    }

    // 4) Dichiaro la relazione diretta tra "Person" e "Post"
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}