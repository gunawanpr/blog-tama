<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
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

        User::create([
            'name' => 'Tama',
            'username' => 'tama',
            'email' => 'tama@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(5)->create();

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

      

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed distinctio quos eum maxime, magni eos fuga, nihil praesentium facere neque eveniet mollitia!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed distinctio quos eum maxime, magni eos fuga, nihil praesentium facere neque eveniet mollitia! Quas dolores doloribus nisi excepturi, quia vitae dicta pariatur non, exercitationem mollitia dolorum nihil sunt quaerat aspernatur reiciendis inventore aperiam laboriosam eum quibusdam obcaecati corporis?</p> <p>Adipisci veritatis quod illum magnam non, perspiciatis, natus saepe dolorem et beatae assumenda cum molestiae blanditiis tenetur ad inventore deserunt error aliquam ab ratione? Minima eos voluptates nihil repellendus facilis ad amet doloribus architecto quasi hic molestiae ut tempora maxime esse ratione eum, ipsam ipsum, explicabo enim magni alias adipisci quas.</p> <p>Iusto deserunt rem ipsam esse sint! Rerum perspiciatis cumque labore architecto odit similique saepe quaerat eius, dicta eum omnis enim ex, mollitia voluptates placeat temporibus velit culpa dolore non eveniet numquam, fugit provident. Voluptates incidunt, molestiae inventore laboriosam doloribus repudiandae, vero a tempore alias voluptatem enim deleniti aspernatur qui fugit quaerat minima?</p>'
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id!</p> <p>Architecto eveniet sint aperiam quas hic non est qui reprehenderit ipsam impedit quos, iusto amet maiores aliquid! Debitis non maiores iure cum ipsam veniam harum obcaecati mollitia explicabo totam eaque similique provident, reiciendis quibusdam! Dolore maiores ratione corporis minima laboriosam facere voluptatibus sapiente consequuntur ipsum voluptate quisquam, atque assumenda minus repellat aliquid enim cum voluptates neque ad hic!</p> <p>Rerum laborum velit aut cum, eligendi aliquam nemo nihil impedit tempore excepturi dignissimos voluptate id alias illo adipisci repudiandae corporis! Unde ad ut laborum esse quisquam numquam veniam harum repellendus blanditiis temporibus doloribus fugiat quidem, facere cumque minima laudantium sit impedit tenetur officiis recusandae nostrum tempore praesentium iste amet? Et tenetur explicabo ipsum qui similique doloribus rem ea corporis vitae! Tempore tenetur molestiae sit quibusdam, ullam similique rem nihil culpa suscipit doloribus facilis nesciunt enim deserunt? Illum blanditiis impedit perferendis consequuntur earum ipsum eum vitae excepturi dignissimos vero, nobis harum natus assumenda, aliquam rerum, nulla voluptates veniam tempore molestias aut eos?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'excerpt' => 'Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! ',
        //     'body' => ' <p>Architecto eveniet sint aperiam quas hic non est qui reprehenderit ipsam impedit quos, iusto amet maiores aliquid! Debitis non maiores iure cum ipsam veniam harum obcaecati mollitia explicabo totam eaque similique provident, reiciendis quibusdam! Dolore maiores ratione corporis minima laboriosam facere voluptatibus sapiente consequuntur ipsum voluptate quisquam, atque assumenda minus repellat aliquid enim cum voluptates neque ad hic!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id!</p> <p>Et tenetur explicabo ipsum qui similique doloribus rem ea corporis vitae! Tempore tenetur molestiae sit quibusdam, ullam similique rem nihil culpa suscipit doloribus facilis nesciunt enim deserunt? Illum blanditiis impedit perferendis consequuntur earum ipsum eum vitae excepturi dignissimos vero, nobis harum natus assumenda, aliquam rerum, nulla voluptates veniam tempore molestias aut eos?Rerum laborum velit aut cum, eligendi aliquam nemo nihil impedit tempore excepturi dignissimos voluptate id alias illo adipisci repudiandae corporis! Unde ad ut laborum esse quisquam numquam veniam harum repellendus blanditiis temporibus doloribus fugiat quidem, facere cumque minima laudantium sit impedit tenetur officiis recusandae nostrum tempore praesentium iste amet? </p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Architecto eveniet sint aperiam quas hic non est qui reprehenderit ipsam impedit quos, iusto amet maiores aliquid! Debitis non maiores iure cum ipsam veniam harum obcaecati mollitia explicabo totam eaque similique provident, reiciendis quibusdam! Dolore maiores ratione corporis minima laboriosam facere voluptatibus sapiente consequuntur ipsum voluptate quisquam, atque assumenda minus repellat aliquid enim cum voluptates neque ad hic!',
        //     'body' => ' <p>Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsam doloremque ab doloribus possimus nobis fugiat vitae! Amet, voluptate ullam? Et culpa accusantium consectetur nulla, atque hic dignissimos molestias fuga dolor aliquam non error laboriosam sunt similique magnam asperiores eveniet id!</p> <p>Et tenetur explicabo ipsum qui similique doloribus rem ea corporis vitae! Tempore tenetur molestiae sit quibusdam, ullam similique rem nihil culpa suscipit doloribus facilis nesciunt enim deserunt? Illum blanditiis impedit perferendis consequuntur earum ipsum eum vitae excepturi dignissimos vero, nobis harum natus assumenda, aliquam rerum, nulla voluptates veniam tempore molestias aut eos?Rerum laborum velit aut cum, eligendi aliquam nemo nihil impedit tempore excepturi dignissimos voluptate id alias illo adipisci repudiandae corporis! Unde ad ut laborum esse quisquam numquam veniam harum repellendus blanditiis temporibus doloribus fugiat quidem, facere cumque minima laudantium sit impedit tenetur officiis recusandae nostrum tempore praesentium iste amet? adipisci</p>'
        // ]);

        

        // User::create([
        //     'name' => 'Anggi',
        //     'email' => 'anggi@gmail.com',
        //     'password' => bcrypt('531256')
        // ]);

    }
}
