@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }}の詳細ページ</h1>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>ステータス</th>
        <td>{{ $task->status }}</td>
    </tr>
    <tr>
        <th>タスク</th>
        <td>{{ $task->content }}</td>
    </tr>
</table>


{!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id]) !!}

 

{!! Form::model($task,['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
{!! Form::submit('削除') !!}
{!! Form::close() !!}

@endsection