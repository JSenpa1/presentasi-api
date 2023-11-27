<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = Books::find($id);
        return response()->json($book);
    }
}
