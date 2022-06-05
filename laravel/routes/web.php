<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\post;
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
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "ruhul aco bagus",
        "kelas" => "VII",
        "email" => "ruhul123@gmail.com",
        "image" => "satu.jpg"
    ]);
});



Route::get('/post', function () {

    return view('post', [
        "title" => "post",
        "posts" => post::all()
    ]);
});



//halaman pertama post
Route::get('post/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-post-pertama",
            "author" => "ruhul",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil omnis iusto officia possimus inventore totam consectetur! Eos maiores, minus adipisci suscipit temporibus veniam alias repellendus impedit ducimus, soluta amet dolores saepe optio. Minus, harum. Placeat, nesciunt labore ipsam soluta repellat iure excepturi expedita, cumque, architecto corrupti voluptatem voluptas eos doloribus non! Accusantium soluta quasi quis architecto ea debitis, assumenda blanditiis explicabo expedita exercitationem in culpa sequi aspernatur sit nihil consequuntur possimus id quidem eveniet autem error ipsam. Eos vel quo et! Perspiciatis nulla dolor quasi iste repellat eveniet consectetur magnam nam? In fugiat aliquid dolorem vitae, magnam et nulla laboriosam!"
        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-post-kedua",
            "author" => "joko",
            "image" => "",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa beatae magnam iusto numquam sapiente similique, aliquam repudiandae quidem blanditiis, officia ab eligendi rerum odio commodi, perferendis delectus quasi voluptatibus recusandae voluptas iure? Porro, earum voluptates? Quam sunt quod ratione nostrum consequatur ut vitae facilis, quasi expedita iusto eveniet maiores libero repellat modi eligendi repudiandae dolores obcaecati, aliquid, tenetur odio. Ad optio eius perspiciatis iusto excepturi odio impedit voluptates vero minima, eveniet totam sequi animi amet dignissimos autem sapiente itaque quia dolores. Possimus ullam veritatis, accusamus mollitia cumque non aspernatur facilis aut, itaque nisi similique. Ea deserunt corrupti quam dignissimos dolorum, aliquid optio, amet, quidem quaerat aut facere dolorem odio? Sint minima architecto repellat modi, non ipsum. Quaerat maiores officia laudantium eveniet culpa nesciunt? Placeat reiciendis ducimus tenetur repudiandae sed modi veritatis eveniet voluptatibus alias doloremque rem dignissimos illum architecto consequatur magnam nulla, eos similique non delectus nostrum cum iste! Quisquam blanditiis, debitis fugit molestiae nesciunt obcaecati assumenda officia illum amet asperiores fugiat, accusamus eum tempore est minima porro, quam quo quas aliquid voluptas rerum accusantium ex? Illum obcaecati sequi autem quae quos unde velit porro quod, ex fugit saepe. Repudiandae inventore impedit sequi debitis officia voluptate dicta architecto voluptatum aperiam."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('posts', [
        "title" => "judul-post-pertama",
        "post" => $new_post
    ]);
});
