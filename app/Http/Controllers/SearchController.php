<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\BoardTag;

class SearchController extends Controller
{
    public function index(){
        $boards = Board::get();

        foreach ($boards as $board) {
            foreach ($board->tags as $tag){
            }
        }

        return view('search.index')->with('boards', $boards);
    }
}
