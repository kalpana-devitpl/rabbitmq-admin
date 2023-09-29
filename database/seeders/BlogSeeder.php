<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->delete();
        
        DB::table('blogs')->insert(array (
            0 => array (
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
				'image' => 'https://img.freepik.com/free-vector/blog-concept-illustration-idea-posting-sharing-following_613284-2970.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => array (
                'name' => 'PWA-Progressive Web App',
                'description' => 'A progressive web app (PWA) is an app that is built using web platform technologies, but that provides a user experience like that of a platform-specific app.

				Like a website, a PWA can run on multiple platforms and devices from a single codebase. Like a platform-specific app, it can be installed on the device, can operate while offline and in the background, and can integrate with the device and with other installed apps.',
				'image' => 'https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149051191.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            
        ));
    }
}
