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
            ['title' => 'Atomic Habit', 'category' => 'self improvement', 'payment_type' => 'closed', 'rating' => 4.6, 'price' => 75000,'cover_image' => 'cover_image/atomic-habit.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Harry Potter', 'category' => 'novel', 'payment_type' => 'closed', 'rating' => 4.7, 'price' => 84000,'cover_image' => 'cover_image/harry-potter.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'The Alchemist', 'category' => 'fiction', 'payment_type' => 'closed', 'rating' => 4.6, 'price' => 54000,'cover_image' => 'cover_image/the-alchemist.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['title' => 'Ikigai', 'category' => 'self improvement', 'payment_type' => 'closed', 'rating' => 4.6, 'price' => 63500,'cover_image' => 'cover_image/ikigai.jpg', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
