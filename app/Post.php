<?php
namespace Razor;



use Illuminate\Database\Eloquent\Model;


class Post extends Model {


    protected $table = 'posts';


    public function tags()
    {
        return $this->morphMany('Razor\Tag', 'taggable');
    }
}