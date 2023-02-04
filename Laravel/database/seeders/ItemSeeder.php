<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'Tomat',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distincti, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 20000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Timun',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 5000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Sawi',
            'item_desc' => 'ipsum nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 6000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Jagung',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 12000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Kangkung',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. ratione ab ipsam, velit quae? Et!',
            'price' => 13000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Bayam',
            'item_desc' => 'id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 6000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Kailan',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut',
            'price' => 2000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Wortel',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 1000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Kentang',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 4000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Kacang',
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 35000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Toge',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid?',
            'price' => 8000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Buncis',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, voluptatum dicta corrupti aliquid?',
            'price' => 12000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Kacang Panjang',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid?',
            'price' => 7000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Tempe',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid?',
            'price' => 3000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Tahu',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid? deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid?',
            'price' => 9000,
        ]);
    }
}
