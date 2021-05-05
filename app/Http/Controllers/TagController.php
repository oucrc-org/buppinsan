<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index()
    {
        return Tag::query()->get();
//        return view('tags.index')
//            ->with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Tag::query()->insert(['name' => $request->tag_name]);
        return redirect(route('tag.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, $id)
    {
        Tag::query()->where('id',$id)->update(['name' => $request->tag_edit]);
        return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(int $id)
    {
        Tag::query()->find($id)->delete();
        return redirect(route('tag.index'));
    }


//  =================================================
//   　ここからAPI用の処理
//  =================================================

    /**
     * 登録されているタグを全て返す関数
     *
     * @return string
     */
    public function getAllTags(): string{
        if ($tags = Tag::all()){
            return json_encode(['success' => true, 'tags' => $tags]);
        }else{
            return json_encode(['success' => false]);
        }
    }
}
