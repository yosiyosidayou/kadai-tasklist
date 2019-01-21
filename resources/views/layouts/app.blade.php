<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タスクリスト</title>
    </head>
    <body>
        
        <div class="container">
            @include('commons.error_messages')
        
        
        {!! link_to_route('tasks.create','新規タスク登録') !!}
            @yield('content')
        </div>
    </body>
</html>