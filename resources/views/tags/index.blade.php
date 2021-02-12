@foreach($tags as $tag)
    <p>{{ $tag->name }}</p>
    <form action="{{ route('tag.update', ['tag' => $tag->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT"> <!-- この1行を追加！ -->
        <input type="text" name="tag_edit">
        <button type="submit">更新</button>
    </form>
    <form action="{{ route('tag.destroy', ['tag' => $tag->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE"> <!-- この1行を追加！ -->
        <button type="submit">削除</button>
    </form>
@endforeach

<p>==============================</p>

<form action="{{ route('tag.store') }}" method="POST">
    @csrf
    <input name="tag_name" type="text">
    <button type="submit">登録</button>
</form>
