<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    
    public function post()
    {
        return $this->belongsTo(Post::class );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
