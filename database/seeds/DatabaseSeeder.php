<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PostsSeeder::class);
    }
}

class PostsSeeder extends Seeder
{
    public function run()
    {
        // TODO: Implement run() method.
        DB::table('posts')->delete();
        Post::create([
          'title' => 'Первый пост',
          'slug' => 'first-post',
          'excerpt' => '<b>Текст первого сообщения</b>',
          'content' => '<p>Содержимое <b>первого сообщения</b></p>',
          'published' => TRUE,
          'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
          'title' => 'Второй пост',
          'slug' => 'second-post',
          'excerpt' => '<b>Текст второго сообщения</b>',
          'content' => '<p>Содержимое <b>второго сообщения</b></p>',
          'published' => TRUE,
          'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
          'title' => 'третий пост',
          'slug' => 'third-post',
          'excerpt' => '<b>Текст третьего сообщения</b>',
          'content' => '<p>Содержимое <b>третьего сообщения</b></p>',
          'published' => FALSE,
          'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
          'title' => '4 пост',
          'slug' => '4-post',
          'excerpt' => '<b>Текст третьеого сообщения</b>',
          'content' => '<p>Содержимое <b>третьеого сообщения</b></p>',
          'published' => FALSE,
          'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}