<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //User::create([
            //'name' => 'ardhya ramadani',
           // 'email' => 'ardhya.ramadani21@gmail.com',
          //  'password' => bcrypt(12345)

        //]);

       // User::create([
            //'name' => 'nadiva thissa',
            //'email' => 'nadivathis21@gmail.com',
          //  'password' => bcrypt(54321 )

     //   ]);


     User::factory(3)->create();

         Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);


        Category::create([
          'name' => 'Web Design',
          'slug' => 'web-design'
      ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();
       // Post::create([
        //    'tittle' => 'Judul Pertama',
        //    'slug' => 'judul-pertama',
         //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
         //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quia minus possimus ad illo, non numquam architecto cupiditate aperiam quaerat ipsa eos provident expedita optio voluptas blanditiis vitae obcaecati, culpa repellat excepturi nisi, iste harum hic accusamus? Itaque, blanditiis accusantium? Laboriosam cupiditate impedit, magnam voluptatibus iusto esse odit similique ipsam animi quaerat unde quisquam praesentium ab minima illum distinctio voluptates corrupti facere cum veniam eligendi assumenda obcaecati ullam totam? Libero quas odio tempore, ad natus placeat voluptatum architecto tempora at praesentium quod recusandae nam molestiae consequuntur inventore culpa est sit dolorum quae pariatur, hic temporibus! Saepe repellat quidem illum est?',
         //   'category_id' => 1,
         //   'user_id' => 1
    //    ]);

      //  Post::create([
        //    'tittle' => 'Judul kedua',
         //   'slug' => 'judul-kedua',
         //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
         //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quia minus possimus ad illo, non numquam architecto cupiditate aperiam quaerat ipsa eos provident expedita optio voluptas blanditiis vitae obcaecati, culpa repellat excepturi nisi, iste harum hic accusamus? Itaque, blanditiis accusantium? Laboriosam cupiditate impedit, magnam voluptatibus iusto esse odit similique ipsam animi quaerat unde quisquam praesentium ab minima illum distinctio voluptates corrupti facere cum veniam eligendi assumenda obcaecati ullam totam? Libero quas odio tempore, ad natus placeat voluptatum architecto tempora at praesentium quod recusandae nam molestiae consequuntur inventore culpa est sit dolorum quae pariatur, hic temporibus! Saepe repellat quidem illum est?',
         //   'category_id' => 1,
         //   'user_id' => 1
       // ]);

      //  Post::create([
       //     'tittle' => 'Judul Ketiga',
       //     'slug' => 'judul-ketiga',
       //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quia minus possimus ad illo, non numquam architecto cupiditate aperiam quaerat ipsa eos provident expedita optio voluptas blanditiis vitae obcaecati, culpa repellat excepturi nisi, iste harum hic accusamus? Itaque, blanditiis accusantium? Laboriosam cupiditate impedit, magnam voluptatibus iusto esse odit similique ipsam animi quaerat unde quisquam praesentium ab minima illum distinctio voluptates corrupti facere cum veniam eligendi assumenda obcaecati ullam totam? Libero quas odio tempore, ad natus placeat voluptatum architecto tempora at praesentium quod recusandae nam molestiae consequuntur inventore culpa est sit dolorum quae pariatur, hic temporibus! Saepe repellat quidem illum est?',
       //     'category_id' => 2,
       //     'user_id' => 1
      //  ]);

     //   Post::create([
        //    'tittle' => 'Judul Keempat',
        //    'slug' => 'judul-keempat',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quia minus possimus ad illo, non numquam architecto cupiditate aperiam quaerat ipsa eos provident expedita optio voluptas blanditiis vitae obcaecati, culpa repellat excepturi nisi, iste harum hic accusamus? Itaque, blanditiis accusantium? Laboriosam cupiditate impedit, magnam voluptatibus iusto esse odit similique ipsam animi quaerat unde quisquam praesentium ab minima illum distinctio voluptates corrupti facere cum veniam eligendi assumenda obcaecati ullam totam? Libero quas odio tempore, ad natus placeat voluptatum architecto tempora at praesentium quod recusandae nam molestiae consequuntur inventore culpa est sit dolorum quae pariatur, hic temporibus! Saepe repellat quidem illum est?',
        //    'category_id' => 2,
        //    'user_id' => 2
       // ]);
    }
}