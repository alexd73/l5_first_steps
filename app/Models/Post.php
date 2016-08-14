<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

    /**
     * Возвращает список опубликованных постов
     * @return mixed
     */
    public function getPublishedPosts()
    {
        $posts = Post::latest('published_at')
          ->published()
          ->get();
        return $posts;
    }

    public function getUnPublishedPosts()
    {
        $posts = Post::latest('published_at')
          ->unPublished()
          ->get();
        return $posts;
    }

    /**
     * Позволяет менять логику выборки опубликованных постов
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now())
          ->where('published', TRUE);
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '=>', Carbon::now())
          ->orWhere('published', FALSE);
    }
}
