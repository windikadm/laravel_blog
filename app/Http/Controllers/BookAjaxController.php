<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use App\Book;

class BookAjaxController extends Controller

{

    public function index()
    {
    	return view('books-ajax.index');
    }

    public function books()
    {
    	$books = Book::query();

    	return Datatables::of($books)->make(true);
    }

}
