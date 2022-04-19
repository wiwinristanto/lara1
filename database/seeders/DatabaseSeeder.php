<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        User::create([
            'name'=> 'Wiwin Ristanto  ',
            'email'=> 'wiwin@gmail.com',
            'password'=> bcrypt('12345')
        ]);

        User::create([
            'name'=> 'Anzu HZ',
            'email'=> 'anzu@gmail.com',
            'password'=> bcrypt('12345')
        ]);


        User::create([
            'name'=> 'Putri S',
            'email'=> 'putri@gmail.com',
            'password'=> bcrypt('12345')
        ]);
    
    
        Post::create([
            'title' => 'Judul Buku Pertama',
            'slug' =>'judul-buku-pertama',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'alias vrunt architecto numquam eveniet, magnam amet ndi.',
            'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit earum nesciunt voluptatem! Cumque, dolorem impedit aliquid saepe, deserunt labore ratione vitae fuga accusantium neque eos praesentium explicabo sit non sapiente quasi quaerat provident illum maiores voluptatem porro.</p><p> Odio assumenda iure temporibus est unde nisi commodi corrupti architecto deleniti rem alias odit accusantium magni, cumque nam et omnis iusto consequuntur non voluptatibus nemo. </p><p>Amet corrupti mollitia quis iste quam repellendus quod quo laborum animi ratione ipsam, autem placeat obcaecati ducimus quidem ad magnam error sunt maiores non! Consectetur atque nulla temporibus hic distinctio? Est aliquid quod suscipit distinctio eius impedit dolores totam enim incidunt sapiente aperiam aut, reprehenderit nostrum eaque ut a harum sint quae in voluptatem ullam dolor quos esse.</p> <p>Quam illo fugiat similique, quaerat non consectetur explicabo minus sunt eos quas quod impedit eveniet facere enim deleniti, unde harum ut accusamus suscipit autem dolorem quia beatae tempore! Obcaecati eligendi beatae saepe dolorum omnis maxime voluptates natus totam molestias tenetur, id, illo quidem nihil sunt dolor, corporis optio voluptatum reiciendis vero incidunt a! Dolore tenetur fugit corporis magni quas possimus molestiae officia atque praesentium alias voluptates saepe a illo doloribus deserunt architecto numquam eveniet, magnam amet adipisci maiores eligendi.</p>'
        ]);

        Post::create([
            'title' => 'Judul Buku ke Dua',
            'slug' => 'judul-buku-ke-dua',
            'category_id' => 2,
            'user_id' => 1,
            'excerpt' => 'alias vrunt architecto numquam eveniet, magnam amet ndi.',
            'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit earum nesciunt voluptatem! Cumque, dolorem impedit aliquid saepe, deserunt labore ratione vitae fuga accusantium neque eos praesentium explicabo sit non sapiente quasi quaerat provident illum maiores voluptatem porro.</p><p> Odio assumenda iure temporibus est unde nisi commodi corrupti architecto deleniti rem alias odit accusantium magni, cumque nam et omnis iusto consequuntur non voluptatibus nemo. </p><p>Amet corrupti mollitia quis iste quam repellendus quod quo laborum animi ratione ipsam, autem placeat obcaecati ducimus quidem ad magnam error sunt maiores non! Consectetur atque nulla temporibus hic distinctio? Est aliquid quod suscipit distinctio eius impedit dolores totam enim incidunt sapiente aperiam aut, reprehenderit nostrum eaque ut a harum sint quae in voluptatem ullam dolor quos esse.</p> <p>Quam illo fugiat similique, quaerat non consectetur explicabo minus sunt eos quas quod impedit eveniet facere enim deleniti, unde harum ut accusamus suscipit autem dolorem quia beatae tempore! Obcaecati eligendi beatae saepe dolorum omnis maxime voluptates natus totam molestias tenetur, id, illo quidem nihil sunt dolor, corporis optio voluptatum reiciendis vero incidunt a! Dolore tenetur fugit corporis magni quas possimus molestiae officia atque praesentium alias voluptates saepe a illo doloribus deserunt architecto numquam eveniet, magnam amet adipisci maiores eligendi.</p>'
        ]);

        Post::create([
            'title' => 'Judul Buku ke Tiga',
            'slug' => 'judul-buku-ke-tiga',
            'category_id' => 1,
            'user_id' => 2,
            'excerpt' => 'alias vrunt architecto numquam eveniet, magnam amet ndi.',
            'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit earum nesciunt voluptatem! Cumque, dolorem impedit aliquid saepe, deserunt labore ratione vitae fuga accusantium neque eos praesentium explicabo sit non sapiente quasi quaerat provident illum maiores voluptatem porro.</p><p> Odio assumenda iure temporibus est unde nisi commodi corrupti architecto deleniti rem alias odit accusantium magni, cumque nam et omnis iusto consequuntur non voluptatibus nemo. </p><p>Amet corrupti mollitia quis iste quam repellendus quod quo laborum animi ratione ipsam, autem placeat obcaecati ducimus quidem ad magnam error sunt maiores non! Consectetur atque nulla temporibus hic distinctio? Est aliquid quod suscipit distinctio eius impedit dolores totam enim incidunt sapiente aperiam aut, reprehenderit nostrum eaque ut a harum sint quae in voluptatem ullam dolor quos esse.</p> <p>Quam illo fugiat similique, quaerat non consectetur explicabo minus sunt eos quas quod impedit eveniet facere enim deleniti, unde harum ut accusamus suscipit autem dolorem quia beatae tempore! Obcaecati eligendi beatae saepe dolorum omnis maxime voluptates natus totam molestias tenetur, id, illo quidem nihil sunt dolor, corporis optio voluptatum reiciendis vero incidunt a! Dolore tenetur fugit corporis magni quas possimus molestiae officia atque praesentium alias voluptates saepe a illo doloribus deserunt architecto numquam eveniet, magnam amet adipisci maiores eligendi.</p>'
        ]);

        Post::create([
            'title' => 'Judul Buku ke Empat',
            'slug' => 'judul-buku-ke-empat',
            'category_id' => 3,
            'user_id' => 3,
            'excerpt' => 'alias vrunt architecto numquam eveniet, magnam amet ndi.',
            'body' =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fugit earum nesciunt voluptatem! Cumque, dolorem impedit aliquid saepe, deserunt labore ratione vitae fuga accusantium neque eos praesentium explicabo sit non sapiente quasi quaerat provident illum maiores voluptatem porro.</p><p> Odio assumenda iure temporibus est unde nisi commodi corrupti architecto deleniti rem alias odit accusantium magni, cumque nam et omnis iusto consequuntur non voluptatibus nemo. </p><p>Amet corrupti mollitia quis iste quam repellendus quod quo laborum animi ratione ipsam, autem placeat obcaecati ducimus quidem ad magnam error sunt maiores non! Consectetur atque nulla temporibus hic distinctio? Est aliquid quod suscipit distinctio eius impedit dolores totam enim incidunt sapiente aperiam aut, reprehenderit nostrum eaque ut a harum sint quae in voluptatem ullam dolor quos esse.</p> <p>Quam illo fugiat similique, quaerat non consectetur explicabo minus sunt eos quas quod impedit eveniet facere enim deleniti, unde harum ut accusamus suscipit autem dolorem quia beatae tempore! Obcaecati eligendi beatae saepe dolorum omnis maxime voluptates natus totam molestias tenetur, id, illo quidem nihil sunt dolor, corporis optio voluptatum reiciendis vero incidunt a! Dolore tenetur fugit corporis magni quas possimus molestiae officia atque praesentium alias voluptates saepe a illo doloribus deserunt architecto numquam eveniet, magnam amet adipisci maiores eligendi.</p>'
        ]);
    }
}
