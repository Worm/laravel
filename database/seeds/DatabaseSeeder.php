<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Razor\Post;
use Razor\Video;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
//
//		$this->call('PostTableSeeder');
//		$this->call('VideoTableSeeder');
//
		$this->call('ArticleTableSeeder');

		$this->command->info('All seeded good!');
	}




}

class ArticleTableSeeder extends Seeder {

	public $faker;

	public function run()
	{

		$this->faker = Faker\Factory::create();
		DB::table('articles')->delete();

		for ($i=0; $i<=20; $i++) {
			\Razor\Article::create(['title' => $this->faker->text(50),
				'body' => $this->faker->paragraph(),
				'published_at' => $this->faker->date()]);

		}
	}

}


class PostTableSeeder extends Seeder {

	public $faker;

	public function run()
	{

		$this->faker = Faker\Factory::create();
		DB::table('posts')->delete();

		for ($i=0; $i<=20; $i++) {
			Post::create(['title' => $this->faker->text(50),
				'description' => $this->faker->paragraph()]);

		}
	}

}

class VideoTableSeeder extends Seeder {

	public $faker;

	public function run()
	{

		$this->faker = Faker\Factory::create();
		DB::table('videos')->delete();

		for ($i=0; $i<=20; $i++) {
			Video::create(['video_title' => $this->faker->text(50),
				'video_url' => $this->faker->url]);

		}
	}

}