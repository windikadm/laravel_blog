<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    $book = new \App\Book;

    $book->nama ='kitabul jami';
    $book->genre = 'religi';
    $book->harga = '20000'

    $book->save();

}
