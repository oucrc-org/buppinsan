<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Type\Integer;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('buppin.create')->with('board', new Board());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Board::create([
            'name' => $request->name,
            'tepra_number' => $request->tepra_number,
            'belong' => $request->belong,
            'photo_path' => $request->photo_path,
            'detail' => $request->detail
        ]);
        return redirect(route('home'))->with('flash_message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board = Board::where('id', $id)->firstOrFail();
        return view('buppin.show')->with('board', $board);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = Board::where('id', $id)->firstOrFail();
        return view('buppin.edit')->with('board', $board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $board = Board::where('id', $request->id)->update([
            'name' => $request->name,
            'tepra_number' => $request->tepra_number,
            'belong' => $request->belong,
            'photo_path' => $request->photo_path,
            'detail' => $request->detail
        ]);
        return redirect(route('home'))->with('flash_message', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 削除する項目を別のテーブルに退避する処理
        Board::WHERE('id', $id)->delete();

        // 仮状態（一覧表示にリダイレクトするのが本来の挙動）
        return redirect(route('home'))->with('flash_message', 'うんぴしました');
    }


//  =================================================
//   　ここからAPI用の処理
//  =================================================


    /**
     * 指定された物品をすべて返します。
     *
     * @return string
     */
    public function getBoards(): string
    {
        if ($boards = Board::query()->with(['tags'])->get())
            return json_encode(['success' => true, 'boards' => $boards]);
        else
            return json_encode(['success' => false]);
    }


    /**
     * 物品の詳細情報を返します。
     *
     * @param $board_id
     * @return string
     */
    public function getBoardDetail($board_id): string
    {
        if ($board = Board::query()->with(['tags'])->findOrFail($board_id))
            return json_encode(['success' => true, 'board' => $board]);
        else
            return json_encode(['success' => false]);
    }
}
