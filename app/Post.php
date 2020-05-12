<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;

    protected $fillable = ['slug', 'editor', 'title', 'description', 'published_at', 'images_path'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * return all Blogs order by
     *
     */
    public function scopeAllPosts()
    {
        return $this->orderBy('published_at', 'desc')
            ->get();
    }

}
