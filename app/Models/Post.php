<?php

namespace App\Models;

use App\Models\Likes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }
}
