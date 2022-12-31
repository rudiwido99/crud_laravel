<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Rudi Wido Atmojo',
        //     'email' => 'rudiwido@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Feri Kurniawan',
        //     'email' => 'ferikurniawan@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design Grafis',
            'slug' => 'design-grafis'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);


        Article::factory(20)->create();


        // Article::create([
        //     'title' => 'Judul Postingan Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, veritatis!',
        //     'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        //              Asperiores, aliquam aliquid doloremque aperiam mollitia cum dolorum quo saepe earum 
        //              libero tempora praesentium cumque adipisci at corporis. Eos voluptas unde mollitia assumenda 
        //              numquam maxime minus illo nostrum, reprehenderit nam ipsam. Est accusantium eaque at deserunt 
        //              excepturi itaque, minus nihil placeat consectetur reiciendis. Ratione assumenda voluptatum deleniti sequi 
        //              omnis possimus quas! Soluta, labore sunt? Dolorem culpa nulla eum sit. Veniam natus doloremque quae, 
        //              asperiores distinctio magnam quam voluptas deserunt ex sapiente. Veniam iusto voluptatum voluptate similique 
        //              autem rerum placeat nesciunt. Necessitatibus cum aliquam minima pariatur quae error voluptas veritatis consequuntur dolorum ipsa.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Postingan Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-postingan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, veritatis!',
        //     'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        //              Asperiores, aliquam aliquid doloremque aperiam mollitia cum dolorum quo saepe earum 
        //              libero tempora praesentium cumque adipisci at corporis. Eos voluptas unde mollitia assumenda 
        //              numquam maxime minus illo nostrum, reprehenderit nam ipsam. Est accusantium eaque at deserunt 
        //              excepturi itaque, minus nihil placeat consectetur reiciendis. Ratione assumenda voluptatum deleniti sequi 
        //              omnis possimus quas! Soluta, labore sunt? Dolorem culpa nulla eum sit. Veniam natus doloremque quae, 
        //              asperiores distinctio magnam quam voluptas deserunt ex sapiente. Veniam iusto voluptatum voluptate similique 
        //              autem rerum placeat nesciunt. Necessitatibus cum aliquam minima pariatur quae error voluptas veritatis consequuntur dolorum ipsa.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Postingan Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-postingan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, veritatis!',
        //     'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        //              Asperiores, aliquam aliquid doloremque aperiam mollitia cum dolorum quo saepe earum 
        //              libero tempora praesentium cumque adipisci at corporis. Eos voluptas unde mollitia assumenda 
        //              numquam maxime minus illo nostrum, reprehenderit nam ipsam. Est accusantium eaque at deserunt 
        //              excepturi itaque, minus nihil placeat consectetur reiciendis. Ratione assumenda voluptatum deleniti sequi 
        //              omnis possimus quas! Soluta, labore sunt? Dolorem culpa nulla eum sit. Veniam natus doloremque quae, 
        //              asperiores distinctio magnam quam voluptas deserunt ex sapiente. Veniam iusto voluptatum voluptate similique 
        //              autem rerum placeat nesciunt. Necessitatibus cum aliquam minima pariatur quae error voluptas veritatis consequuntur dolorum ipsa.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Postingan Keempat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-postingan-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, veritatis!',
        //     'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        //              Asperiores, aliquam aliquid doloremque aperiam mollitia cum dolorum quo saepe earum 
        //              libero tempora praesentium cumque adipisci at corporis. Eos voluptas unde mollitia assumenda 
        //              numquam maxime minus illo nostrum, reprehenderit nam ipsam. Est accusantium eaque at deserunt 
        //              excepturi itaque, minus nihil placeat consectetur reiciendis. Ratione assumenda voluptatum deleniti sequi 
        //              omnis possimus quas! Soluta, labore sunt? Dolorem culpa nulla eum sit. Veniam natus doloremque quae, 
        //              asperiores distinctio magnam quam voluptas deserunt ex sapiente. Veniam iusto voluptatum voluptate similique 
        //              autem rerum placeat nesciunt. Necessitatibus cum aliquam minima pariatur quae error voluptas veritatis consequuntur dolorum ipsa.'
        // ]);
        


    }
}
