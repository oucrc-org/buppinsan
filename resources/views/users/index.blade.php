@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@foreach($users as $user)
    <p>{{ $user->name }}</p>
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name">
        <button type="submit">更新</button>
    </form>
    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">削除</button>
    </form>
    <hr>
@endforeach
