<?php

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
        DB::table('products')->insert(
            [
                [
                    'name' => 'Xiaomi Phone',
                    'price' => 100,
                    'category' => 'Smartphone',
                    'description' => 'Lorem ipsum dolor sit amet.',
                    'gallery' => 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1782&q=80'
                ],
                [
                    'name' => 'iPhone',
                    'price' => 300,
                    'category' => 'Smartphone',
                    'description' => 'Lorem ipsum dolor sit amet consectetur.',
                    'gallery' => 'https://images.unsplash.com/photo-1603015269169-225cb700e29a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80'
                ],
                [
                    'name' => 'Kulkas Hijau',
                    'price' => 500,
                    'category' => 'Elektronik',
                    'description' => 'Lorem ipsum dolor sit amet consectetur.',
                    'gallery' => 'https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80'
                ],
                [
                    'name' => 'Smart TV',
                    'price' => 340,
                    'category' => 'Elektronik',
                    'description' => 'Lorem ipsum dolor sit amet consectetur.',
                    'gallery' => 'https://images.unsplash.com/photo-1577979749830-f1d742b96791?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80'
                ],
            ]
        );
    }
}
