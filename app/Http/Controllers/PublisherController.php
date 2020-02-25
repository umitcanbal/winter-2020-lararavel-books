<?php

namespace App\Http\Controllers;

use App\Book;
use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();

        return view('publishers.index', compact('publishers'));
    }

    public function show($id){
        $publisher = Publisher::findOrFail($id);
        $books = Book::where('publisher_id', $id)->get();

        return view('publishers.show',
            compact('publisher', 'books'));
    }

    public function create(){
        return view('publishers/create');
    }

    public function store(Request $request){
        // Create empty object of type `Publisher`
        $p = new Publisher;

        // Fill the attributes (columns) of that object
        $p->title = $request->input('publisher_title');

        // Save it to DB
        $p->save();

        return $p;
    }

}
