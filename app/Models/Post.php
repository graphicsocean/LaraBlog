<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'user_id','slug','category','status','likes','dislikes','featured'
    ];
    protected $appends = ['user'];

    public function getUserAttribute()
    {
        return User::where('id', $this->user_id)->first();
    }


}
