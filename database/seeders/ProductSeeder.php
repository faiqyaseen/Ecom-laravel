<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'HP Laptop',
                'price' => '30000',
                'category' => 'laptop',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio recusandae magnam possimus placeat id quisquam neque unde esse pariatur',
                'gallery' => 'https://images.unsplash.com/photo-1589561084283-930aa7b1ce50?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aHAlMjBsYXB0b3B8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name' => 'Sony Tv',
                'price' => '22000',
                'category' => 'Television',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio recusandae magnam possimus placeat id quisquam neque unde esse pariatur',
                'gallery' => 'https://images.unsplash.com/photo-1567690187548-f07b1d7bf5a9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTExfHx0dnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => '22000',
                'category' => 'mobile',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure optio recusandae magnam possimus placeat id quisquam neque unde esse pariatur',
                'gallery' => 'https://images.unsplash.com/photo-1608373721627-80a5a002c569?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fG9wcG8lMjBtb2JpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
            ],
        ]);
    }
}
