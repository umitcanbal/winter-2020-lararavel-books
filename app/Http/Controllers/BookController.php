<?php

namespace App\Http\Controllers;

use DB;

class BookController extends Controller
{
    public function index()
    {

        $name    = 'Slavo';
        $surname = "Kozar";

//        $view = view('books')
//            ->with('user', $name)
//            ->with('surname', $surname);

//        $view = view('books')
//            ->with([
//                'user' => $name,
//                'surname' => $surname
//            ]);

//        $view = view('books', [
//                'user' => $name,
//                'surname' => $surname
//            ]);

        $user = 'Slavo';

        $comment = "I <strong>like</strong> your app!";
        $age     = 20;

        $books = DB::select('SELECT * FROM `books`');

        $view  = view('books',
            compact('user', 'surname', 'comment', 'age', 'books')
        );
        return $view;
    }
}
