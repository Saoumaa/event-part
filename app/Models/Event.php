<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function tags()

    {
        return $this->belongsToMany(Tag::class);
    }
}
