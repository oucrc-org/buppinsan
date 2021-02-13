<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $boards = Board::get();

        return view('search.index')->with('boards', $boards);
    }
}
