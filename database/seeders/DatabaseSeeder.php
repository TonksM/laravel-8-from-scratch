<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create([
            'name' => 'Michelle Brat'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        //$user = User::factory()->create();

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $hobby = Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'title' => 'My Hobby Post', 
        //     'excerpt' => 'Pellentesque laoreet vulputate nulla, a sagittis purus placerat convallis.', 
        //     'body' => 'Pellentesque laoreet vulputate nulla, a sagittis purus placerat convallis. Etiam et nisl sollicitudin, feugiat leo at, euismod ipsum. Sed vel ultricies risus. Suspendisse egestas non libero id laoreet. Aliquam erat volutpat. Nulla rutrum odio sed orci interdum, et pulvinar orci elementum. Ut mollis imperdiet pharetra. Donec non velit et nibh fermentum sagittis nec quis ligula. Fusce malesuada varius augue quis cursus. Aliquam commodo massa et ligula volutpat condimentum. Morbi et orci velit. Aliquam vitae tellus a neque condimentum pharetra. ',
        //     'slug' => 'my-hobby-post', 
        //     'category_id' => $hobby->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title'=>'My Personal Post',
        //     'excerpt'=>'Vestibulum maximus ornare tortor nec faucibus. Vivamus consectetur magna eget odio auctor, in pretium libero pretium.',
        //     'body'=>'Vestibulum maximus ornare tortor nec faucibus. Vivamus consectetur magna eget odio auctor, in pretium libero pretium. Proin erat urna, accumsan eu ante pharetra, dignissim aliquam mi. Mauris tincidunt varius tincidunt. Morbi sed egestas enim, eget ornare nunc. Maecenas vestibulum, dolor vel laoreet dictum, ligula ipsum convallis turpis, a elementum nisi ligula in erat. Sed tristique convallis fringilla. Phasellus vitae diam vulputate, mollis augue at, faucibus turpis. Nullam sit amet est consectetur, ullamcorper ante vel, tempor sem. Ut hendrerit neque eros, in elementum enim porttitor vitae. Nam at rutrum eros.', 
        //     'slug'=>'my-personal-post', 
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id
        // ]);

        // Post::create([
        //     'title'=>'My Work Post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum id purus non cursus. Morbi ac feugiat est, eu gravida ligula. Sed tortor lectus, porttitor quis varius ut, dictum at orci. Curabitur ornare leo in eros euismod semper. Curabitur fringilla, diam non aliquet interdum, nunc dolor convallis dui, in tristique nulla mi nec sem. Quisque ante orci, mattis id cursus vel, imperdiet tincidunt justo. Vivamus at laoreet enim, vel porttitor nibh. Nulla vitae sapien tempus libero ullamcorper tincidunt sit amet vel magna. Pellentesque ut dapibus est. Sed ut ante lacinia, viverravodio vitae, condimentum velit. Praesent sollicitudin cursus elementum. Suspendisse ac lobortis quam, at dapibus sem. Pellentesque fringilla libero sit amet felis semper volutpat. Praesent sollicitudin dolor eget fermentum commodo.', 
        //     'slug'=>'my-work-post', 
        //     'category_id' => $work->id,
        //     'user_id' => $user->id
        // ]);

    }
}
