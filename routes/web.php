<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mohammad Rafa Adila",
        "email" => "rafaadila@coba-laravel.test",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});