<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class APIBookController extends Controller
{
    public function index(){

        $books = DB::select('SELECT * FROM `books`');

        return $books;

    }
}
