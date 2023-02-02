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
            'item_desc' => 'ipsum dolor sit amet consectetur adipisicing elit. Eaque soluta possimus id quam iure laboriosam magni ut vel facilis sequi quos doloremque iusto atque sit nam, quisquam quod voluptate exercitationem neque consequuntur. Nostrum consectetur odit aperiam assumenda labore dolor distinctio eligendi velit cupiditate, voluptatum aut qui aliquam maiores similique, quia amet libero doloribus vitae? Hic maiores minus beatae minima. Rerum autem dicta doloribus, provident numquam repudiandae quis harum, sint sequi eveniet saepe ducimus consectetur accusamus. Distinctio quis dolorem veniam minima laboriosam architecto praesentium sequi, aliquid porro et ut vel natus amet ducimus alias, maxime ratione ab ipsam, velit quae? Et!',
            'price' => 24000,
        ]);
        DB::table('items')->insert([
            'item_name' => 'Toge',
            'item_desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio ratione aspernatur, saepe error veniam ex, deleniti possimus debitis non repellendus excepturi, voluptatum dicta corrupti aliquid?',
            'price' => 10000,
        ]);
    }
}
