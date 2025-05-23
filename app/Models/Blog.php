<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status',
    ];

    public function comments() {
        return $this->hasMany(Comment::class)->whereNull('parent_id')->latest();
    }
}
