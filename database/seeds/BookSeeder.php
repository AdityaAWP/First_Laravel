<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['title' => 'Good To Great', 'author' => 'James C. Collins', 'price' => '$13.99'],
            ['title' => 'Purple Cow', 'author' => 'Seth Godin', 'price' => '$7.97'],
            ['title' => 'Grit', 'author' => 'Angela Duckworth', 'price' => '$20.20']
        ]);
    }
}
