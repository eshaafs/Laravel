<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Esha Sajaka',
        //     'email' => 'esha.sajaka@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Bagus Satria',
        //     'email' => 'bagus.satria@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, numquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima laborum iusto maxime perferendis, reprehenderit sed veritatis eligendi eaque blanditiis commodi accusamus.</p> <p>Quibusdam ducimus ullam doloribus commodi rem accusantium voluptates error! Aliquam expedita ea praesentium, nobis, molestiae enim doloremque, quaerat soluta nemo earum mollitia voluptatum veritatis nulla ratione ullam quidem minima libero quae.</p> <p>Excepturi beatae exercitationem ex aperiam quasi? Cum repellendus explicabo facilis amet, dicta ullam possimus non quo magnam, mollitia necessitatibus exercitationem at, corrupti a praesentium neque ad in fugiat. Eius ad nihil veritatis totam sint deleniti tenetur vero nam iste, possimus quas officia voluptatem ipsa animi aspernatur rem optio odit eum. Unde a excepturi architecto distinctio. Voluptatem placeat cum maxime corrupti. Voluptatum eius quam assumenda provident deleniti sit natus illum atque impedit rem cupiditate nisi excepturi laboriosam ab unde repudiandae molestiae debitis, sunt enim, illo maiores dolor veritatis. Distinctio, exercitationem quaerat ullam labore doloribus minus! Fuga dolore vitae quos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, numquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima laborum iusto maxime perferendis, reprehenderit sed veritatis eligendi eaque blanditiis commodi accusamus.</p> <p>Quibusdam ducimus ullam doloribus commodi rem accusantium voluptates error! Aliquam expedita ea praesentium, nobis, molestiae enim doloremque, quaerat soluta nemo earum mollitia voluptatum veritatis nulla ratione ullam quidem minima libero quae.</p> <p>Excepturi beatae exercitationem ex aperiam quasi? Cum repellendus explicabo facilis amet, dicta ullam possimus non quo magnam, mollitia necessitatibus exercitationem at, corrupti a praesentium neque ad in fugiat. Eius ad nihil veritatis totam sint deleniti tenetur vero nam iste, possimus quas officia voluptatem ipsa animi aspernatur rem optio odit eum. Unde a excepturi architecto distinctio. Voluptatem placeat cum maxime corrupti. Voluptatum eius quam assumenda provident deleniti sit natus illum atque impedit rem cupiditate nisi excepturi laboriosam ab unde repudiandae molestiae debitis, sunt enim, illo maiores dolor veritatis. Distinctio, exercitationem quaerat ullam labore doloribus minus! Fuga dolore vitae quos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, numquam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima laborum iusto maxime perferendis, reprehenderit sed veritatis eligendi eaque blanditiis commodi accusamus.</p> <p>Quibusdam ducimus ullam doloribus commodi rem accusantium voluptates error! Aliquam expedita ea praesentium, nobis, molestiae enim doloremque, quaerat soluta nemo earum mollitia voluptatum veritatis nulla ratione ullam quidem minima libero quae.</p> <p>Excepturi beatae exercitationem ex aperiam quasi? Cum repellendus explicabo facilis amet, dicta ullam possimus non quo magnam, mollitia necessitatibus exercitationem at, corrupti a praesentium neque ad in fugiat. Eius ad nihil veritatis totam sint deleniti tenetur vero nam iste, possimus quas officia voluptatem ipsa animi aspernatur rem optio odit eum. Unde a excepturi architecto distinctio. Voluptatem placeat cum maxime corrupti. Voluptatum eius quam assumenda provident deleniti sit natus illum atque impedit rem cupiditate nisi excepturi laboriosam ab unde repudiandae molestiae debitis, sunt enim, illo maiores dolor veritatis. Distinctio, exercitationem quaerat ullam labore doloribus minus! Fuga dolore vitae quos.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
