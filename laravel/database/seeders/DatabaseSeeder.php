<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        user::create([
            'name' => 'ruhul',
            'email' => 'ruhul@gmail.com',
            'password' => bcrypt('123')
        ]);

        user::create([
            'name' => 'aco',
            'email' => 'aco@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore culpa provident molestias at voluptate nisi eaque, architecto libero saepe quo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam est voluptate magni voluptas reprehenderit expedita aut quibusdam exercitationem eveniet facilis libero iste culpa, in maxime quo repellendus ullam laborum sint ex cumque similique! Similique, ad illum mollitia nisi repellendus sapiente. Odio quas voluptatem, natus dolores laudantium rerum consequuntur, tempora nihil illo aliquam distinctio eveniet? Ea odio magnam ducimus reiciendis obcaecati sequi tenetur unde, blanditiis quae repellendus temporibus, commodi doloribus recusandae totam ex delectus deserunt? Sequi, maiores quia quis similique voluptas obcaecati! Nobis, quia! Atque ut adipisci quidem dolorem veritatis. Ratione praesentium animi enim alias ea eaque ipsam reiciendis saepe.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore culpa provident molestias at voluptate nisi eaque, architecto libero saepe quo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam est voluptate magni voluptas reprehenderit expedita aut quibusdam exercitationem eveniet facilis libero iste culpa, in maxime quo repellendus ullam laborum sint ex cumque similique! Similique, ad illum mollitia nisi repellendus sapiente. Odio quas voluptatem, natus dolores laudantium rerum consequuntur, tempora nihil illo aliquam distinctio eveniet? Ea odio magnam ducimus reiciendis obcaecati sequi tenetur unde, blanditiis quae repellendus temporibus, commodi doloribus recusandae totam ex delectus deserunt? Sequi, maiores quia quis similique voluptas obcaecati! Nobis, quia! Atque ut adipisci quidem dolorem veritatis. Ratione praesentium animi enim alias ea eaque ipsam reiciendis saepe.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore culpa provident molestias at voluptate nisi eaque, architecto libero saepe quo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam est voluptate magni voluptas reprehenderit expedita aut quibusdam exercitationem eveniet facilis libero iste culpa, in maxime quo repellendus ullam laborum sint ex cumque similique! Similique, ad illum mollitia nisi repellendus sapiente. Odio quas voluptatem, natus dolores laudantium rerum consequuntur, tempora nihil illo aliquam distinctio eveniet? Ea odio magnam ducimus reiciendis obcaecati sequi tenetur unde, blanditiis quae repellendus temporibus, commodi doloribus recusandae totam ex delectus deserunt? Sequi, maiores quia quis similique voluptas obcaecati! Nobis, quia! Atque ut adipisci quidem dolorem veritatis. Ratione praesentium animi enim alias ea eaque ipsam reiciendis saepe.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore culpa provident molestias at voluptate nisi eaque, architecto libero saepe quo.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam est voluptate magni voluptas reprehenderit expedita aut quibusdam exercitationem eveniet facilis libero iste culpa, in maxime quo repellendus ullam laborum sint ex cumque similique! Similique, ad illum mollitia nisi repellendus sapiente. Odio quas voluptatem, natus dolores laudantium rerum consequuntur, tempora nihil illo aliquam distinctio eveniet? Ea odio magnam ducimus reiciendis obcaecati sequi tenetur unde, blanditiis quae repellendus temporibus, commodi doloribus recusandae totam ex delectus deserunt? Sequi, maiores quia quis similique voluptas obcaecati! Nobis, quia! Atque ut adipisci quidem dolorem veritatis. Ratione praesentium animi enim alias ea eaque ipsam reiciendis saepe.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
