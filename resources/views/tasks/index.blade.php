@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
    <table border=1>
        <tr>
            <th>id</th>
            <th>タスク</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>

            <td>{{ $task->content }}</td>
        </tr>
        @endforeach
    </table>
    @endif

@endsection