<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto impedit, nostrum deleniti iusto pariatur ad sunt dolores, nesciunt, excepturi necessitatibus suscipit numquam. Rerum ex nesciunt error expedita voluptatem, ut quisquam quis totam magnam facere dolorum beatae porro corporis, distinctio voluptatum dignissimos. Expedita aperiam iusto pariatur neque modi deserunt ipsa sequi illum omnis itaque quas veniam, saepe velit laborum. Dolore molestiae magnam libero animi repellendus saepe sint rerum iusto laudantium voluptatum consequatur tempore, corrupti quasi, labore vitae, perferendis delectus. Officia, quae!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mohammad Rafa Adila",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugiat harum perspiciatis, debitis maiores earum tempore! Vitae unde quidem nihil quasi! Ipsum est dolorum a neque accusantium aliquam at dolores recusandae nemo magnam, voluptatem aspernatur assumenda voluptas quas consequuntur obcaecati, non omnis. Dignissimos nostrum, minus excepturi incidunt natus aliquid, consequuntur illo facere tempore, neque quod aspernatur. Repellat, vero doloremque sunt minus itaque facilis ad corporis laudantium quibusdam perspiciatis laborum! Rem soluta blanditiis recusandae corrupti nihil rerum hic sit aperiam quo quidem vero qui reiciendis, magni eum accusantium exercitationem odit. Nemo nostrum non doloribus soluta, id adipisci aut dignissimos tenetur quam?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
