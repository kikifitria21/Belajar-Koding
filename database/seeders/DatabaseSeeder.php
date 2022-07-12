<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        //     User::create([
        //         'name'=>'Shin Mina',
        //         'email'=>'shinmina123@gmail.com',
        //         'password'=>bcrypt('12345')
        //     ]);


            User::factory(5)->create();

        //     Category::create([
        //         'name'=>'Programing',
        //         'slug'=>'programing'
               
        //     ]);

            Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
          ]);

            Category::create([
                'name'=>'Personal',
                'slug'=>'personal'
              
            ]);
            Category::create([
                'name'=>'Programer',
                'slug'=>'programer'
              
            ]);

            Post::factory(20)->create();

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quis eveniet odit iste in commodi accusantium saepe alias corrupti quisquam 
        //         id laboriosam ipsam, nulla similique sint voluptatem tenetur facilis quaerat maiores eum culpa. Atque nam at vero unde ratione 
        //         eligendi modi, iste adipisci iure dicta excepturi quos earum aliquam fuga numquam quibusdam doloribus sit officiis dolores hic ut 
        //         voluptatibus, accusamus deleniti. Ipsa voluptas inventore perferendis voluptates nam. Repellendus soluta unde id similique fugiat aut fugit voluptas deserunt at accu
        //         santium a quisquam quam numquam animi voluptatem corrupti aliquam quos incidunt ea illum quaerat non, dolor veniam aperiam! Voluptatum quisquam iure ullam!',
        //         'category_id' => 1,
        //         'user_category' => 1
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Kedua',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quis eveniet odit iste in commodi accusantium saepe alias corrupti quisquam 
        //         id laboriosam ipsam, nulla similique sint voluptatem tenetur facilis quaerat maiores eum culpa. Atque nam at vero unde ratione 
        //         eligendi modi, iste adipisci iure dicta excepturi quos earum aliquam fuga numquam quibusdam doloribus sit officiis dolores hic ut 
        //         voluptatibus, accusamus deleniti. Ipsa voluptas inventore perferendis voluptates nam. Repellendus soluta unde id similique fugiat aut fugit voluptas deserunt at accu
        //         santium a quisquam quam numquam animi voluptatem corrupti aliquam quos incidunt ea illum quaerat non, dolor veniam aperiam! Voluptatum quisquam iure ullam!',
        //         'category_id' => 2,
        //         'user_category' => 2
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Ketiga',
        //         'slug' => 'judul-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quis eveniet odit iste in commodi accusantium saepe alias corrupti quisquam
        //         id laboriosam ipsam, nulla similique sint voluptatem tenetur facilis quaerat maiores eum culpa. Atque nam at vero unde ratione 
        //         eligendi modi, iste adipisci iure dicta excepturi quos earum aliquam fuga numquam quibusdam doloribus sit officiis dolores hic ut 
        //         voluptatibus, accusamus deleniti. Ipsa voluptas inventore perferendis voluptates nam. Repellendus soluta unde id similique fugiat aut fugit voluptas deserunt at accu
        //         santium a quisquam quam numquam animi voluptatem corrupti aliquam quos incidunt ea illum quaerat non, dolor veniam aperiam! Voluptatum quisquam iure ullam!',
        //         'category_id' => 3,
        //         'user_category' => 3
        //     ]);





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
