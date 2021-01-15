<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie1 = new Movie;
        $movie1->title = 'Star Wars';
        $movie1->release_date = 1977;
        $movie1->viewers = '5000k';
        $movie1->save();

        $movie2 = new Movie;
        $movie2->title = 'Harry Potter';
        $movie2->release_date = 2001;
        $movie2->viewers = '2050k';
        $movie2->save();
    }
}
