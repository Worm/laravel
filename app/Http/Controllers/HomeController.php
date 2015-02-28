<?php
namespace Razor\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Razor\Feed;
use Razor\Post;
use Razor\Tag;
use Razor\Video;


class HomeController extends Controller {

	public $posts;
	public $videos;

	function __construct(Post $posts, Video $videos)
	{
		$this->posts = $posts;
		$this->videos = $videos;
	}


	public function feed(Post $post) {


		$a = $this->posts->all()->toArray();

		$b = $this->videos->all()->toArray();

		$c = array_merge($a,$b);


		$array = array_values(array_sort($c, function($value)
		{
			return $value['updated_at'];
		}));





		return $array;


	}

}
