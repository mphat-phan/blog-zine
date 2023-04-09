<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'user_id',
        'parent_id',
        'metaTitle',
        'slug',
        'summary',
        'content',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filter){
        if($filter['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('summary', 'like', '%' . request('search') . '%');
        }
    }
}
