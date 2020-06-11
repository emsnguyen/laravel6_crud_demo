<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [['title' => 'Sapiens', 'body' => 'A brief history of humankind'],['title' => 'Think and grow rich', 'body' => 'ABC xyz'],['title' => 'Quiet', 'body' => 'The power of introverts in a world that cannot stop talking'],['title' => 'The fountainhead', 'body' => 'To sell yourself is the easiest thing in the world. That\'s what everybody does every hour of his life. If I asked you to keep your soul, would you understand why that\'s much harder?'],];
        foreach ($posts as $post) {
            Post::create(array('title' => $post['title'], 'body' => $post['body']));
        }
    }
}
