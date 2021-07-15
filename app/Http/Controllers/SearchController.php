<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\BoardTag;

class SearchController extends Controller
{
    public function index(){
        $boards = Board::query()->with('tags')->get();

        return view('search.index')->with('boards', $boards);
    }
}
