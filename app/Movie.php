<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{

    protected $fillable = ['title', 'release_date', 'viewers'];


    //Untuk Menggunakan Koneksi Selain Default
    // protected $connection = "nama_koneksi";
}
