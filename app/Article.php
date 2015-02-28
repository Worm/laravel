<?php namespace Razor;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {


    /**
     * Fillable fields of a article
     * @var array
     */
    protected $fillable = ['title','body','published_at'];


    /**
     * Carbon dates
     * @var array
     */
    protected $dates = ['published_at'];


    /**
     * @param $date
     */
    public function setPublishedAtAttribure($date) {

        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);

    }


    public function scopePublished($query) {
        $query->where('published_at','<=',Carbon::now());
    }

}
