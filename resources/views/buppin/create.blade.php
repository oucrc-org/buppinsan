@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('buppin.store') }}">
        @csrf
        <div>
            <label>
                物品名
                <input type="text" name="name" required autofocus/>
            </label>
        </div>
        <div>
            <label>
                テプラナンバー
                <input type="text" name="tepra_number"/>
            </label>
        </div>
        <div>
            <label>
                私物かどうか
                <select name="belong">
                    <option value=0>備品</option>
                    <option value=1>私物</option>
                    <option value=2>不明</option>
                </select>
            </label>
        </div>
        <div>
            <label>
                写真のURL
                <input type="url" name="photo_path"/>
            </label>
        </div>
        <div>
            <label>
                紹介文
                <textarea name="detail" required></textarea>
            </label>
        </div>

        <div>
            <input type="submit" value="登録する"/>
        </div>
    </form>
@endsection
