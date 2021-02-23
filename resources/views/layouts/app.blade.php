<!DOCTYPE HTML>
<html lang="ja">
<head>
    <title>物品さん</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <h1>Header</h1>

    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif

    <div id="app">

    </div>

    <h1>Footer</h1>
</body>
</html>
