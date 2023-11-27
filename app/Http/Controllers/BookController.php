<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BookController extends Controller
{
    public function index($id)
    {
        $books = Books::find($id);
        return response()->json($books);
    }
}
