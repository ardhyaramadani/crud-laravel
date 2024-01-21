<?php

namespace App\Models;
class Post 
{
    private static $blog_posts = [
       
        [
           "tittle" => "Judul Post Pertama",
           "slug" => "judul-post-pertama",
           "author" => "Ardhya Ramadani", 
           "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni id architecto, distinctio quaerat eaque hic laboriosam delectus consectetur consequuntur eius aspernatur numquam culpa impedit nulla, asperiores officiis a quas odit quibusdam. Esse, ipsum temporibus. Minima animi consequatur error quisquam tempore quas, maxime iste ut, cupiditate alias eius magni non iusto ipsa ab, quod debitis. Eos, officiis voluptate, saepe accusantium porro sunt possimus beatae, aliquam totam officia laudantium sequi incidunt alias. Dignissimos iusto aliquid id reprehenderit cupiditate accusamus quam provident." 
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Thisa", 
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dignissimos ullam, repellendus tempore pariatur iure odio possimus incidunt vero ipsam ducimus perferendis maiores debitis perspiciatis dolor quia facilis illum voluptates enim nisi? Placeat tenetur eos esse at est magni laboriosam ullam veritatis sapiente odio dicta repellendus libero inventore repudiandae, voluptatem cupiditate reiciendis alias delectus consequuntur sit. Aspernatur fuga asperiores tenetur, eum voluptatibus ut sint porro accusamus dicta voluptates quidem natus, a, nihil molestiae velit excepturi id sit labore inventore. Ducimus eaque fugiat in! Temporibus distinctio, reprehenderit architecto et quidem, ut nesciunt, iure dignissimos minima odio quis deserunt laudantium deleniti quas!"
          
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }

}
    

   
     
    