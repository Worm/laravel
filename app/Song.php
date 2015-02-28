<?php
namespace Razor;



use Illuminate\Database\Eloquent\Model;


class Song extends Model {

    /**
     * Fillable fields of a song
     * @var array
     */
    protected $fillable = ['title','lirycs','slug'];

}