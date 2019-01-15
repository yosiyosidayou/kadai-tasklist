<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タスクリスト</title>
    </head>
    <body>
        {!! link_to_route('tasks.create','新規タスク登録') !!}
        <div clas="container">
            @yield('content')
        </div>
    </body>
</html>