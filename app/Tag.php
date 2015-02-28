<?php
namespace Razor;



use Illuminate\Database\Eloquent\Model;


class Tag extends Model {


    protected $table = 'tags';


    public function taggable()
    {
        return $this->morphTo();
    }


}