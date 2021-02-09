<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>物品さん</title>
</head>
<body>
    <h1>Header</h1>

    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif

    <main class="mt-4">
        @yield('content')
    </main>

    <h1>Footer</h1>
</body>
</html>
