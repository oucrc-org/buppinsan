<div>
    @if($target == 'create')
        <form method="POST" action="{{ route('buppin.store') }}">
    @elseif($target == 'edit')
        <form method="POST"  action="{{ route('buppin.update', ['buppin' => $board]) }}">
            <input type="hidden" name="_method" value="PUT">
    @endif
            @csrf
            <div>
                <label>
                    物品名
                    <input type="text" name="name" value="{{ $board->name }}" required autofocus/>
                </label>
            </div>
            <div>
                <label>
                    テプラナンバー
                    <input type="text" name="tepra_number" value="{{ $board->tepra_number }}"/>
                </label>
            </div>
            <div>
                <label>
                    私物かどうか
                    {{Form::select('belong', [0 => '備品', 1 => '私物', 2 => '不明'], $board->belong)}}
                </label>
            </div>
            <div>
                <label>
                    写真のURL
                    <input type="url" name="photo_path" value="{{ $board->photo_path }}"/>
                </label>
            </div>
            <div>
                <label>
                    紹介文
                    {{Form::textarea('detail', $board->detail)}}
                </label>
            </div>
            <div>
                <input type="submit" value="登録する"/>
            </div>
        </form>
</div>
