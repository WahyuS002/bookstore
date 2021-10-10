<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('books')->insert([
            ['title' => 'Atomic Habits', 'category' => 'self improvement', 'rating' => 4.6, 'price' => 75000,'cover_image' => 'cover_image/atomic-habits.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Harry Potter', 'category' => 'novel', 'rating' => 4.7, 'price' => 84000,'cover_image' => 'cover_image/harry-potter.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'The Alchemist', 'category' => 'fiction', 'rating' => 4.6, 'price' => 54000,'cover_image' => 'cover_image/the-alchemist.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Ikigai', 'category' => 'self improvement', 'rating' => 4.6, 'price' => 63500,'cover_image' => 'cover_image/ikigai.jpg', 'created_at' => $now, 'updated_at' => $now],

            ['title' => 'The Art of Story Telling', 'category' => 'self improvement', 'rating' => 4.2, 'price' => 35000,'cover_image' => 'cover_image/the-art-of-story-telling.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Zero to One', 'category' => 'business', 'rating' => 4.8, 'price' => 42500,'cover_image' => 'cover_image/zero-to-one.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Superintelligence', 'category' => 'self improvement', 'rating' => 4.8, 'price' => 65000,'cover_image' => 'cover_image/superintelligence.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Life 3.0', 'category' => 'business', 'rating' => 4.5, 'price' => 72000,'cover_image' => 'cover_image/life-30.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
