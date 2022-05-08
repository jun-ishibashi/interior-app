<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            [
                'user_id' => '0',
                'ip_address' => '',
                'image_path' => '/images/0/0.jpg',
                'content' => 'image 0',
            ],
            [
                'user_id' => '1',
                'ip_address' => '',
                'image_path' => '/images/0/1.jpg',
                'content' => 'image 1',
            ],
            [
                'user_id' => '2',
                'ip_address' => '',
                'image_path' => '/images/0/2.jpg',
                'content' => 'image 2',
            ],
            [
                'user_id' => '3',
                'ip_address' => '',
                'image_path' => '/images/0/3.jpg',
                'content' => 'image 3',
            ],
            [
                'user_id' => '4',
                'ip_address' => '',
                'image_path' => '/images/0/4.jpg',
                'content' => 'image 4',
            ],
            [
                'user_id' => '5',
                'ip_address' => '',
                'image_path' => '/images/0/5.jpg',
                'content' => 'image 5',
            ],
            [
                'user_id' => '6',
                'ip_address' => '',
                'image_path' => '/images/0/6.jpg',
                'content' => 'image 6',
            ],
            [
                'user_id' => '7',
                'ip_address' => '',
                'image_path' => '/images/0/7.jpg',
                'content' => 'image 7',
            ],
            [
                'user_id' => '8',
                'ip_address' => '',
                'image_path' => '/images/0/8.jpg',
                'content' => 'image 8',
            ],
            [
                'user_id' => '9',
                'ip_address' => '',
                'image_path' => '/images/0/9.jpg',
                'content' => 'image 9',
            ],
        ]);
    }
}
