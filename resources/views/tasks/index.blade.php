@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
    <table table-striped>
        <thead>
        <tr>
            <th>id</th>
            <th>ステータス</th>
            <th>タスク</th>
        </tr>
        </thead>
        <tbody></tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
            <td>{{ $task->status }}</td>
            <td>{{ $task->content }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif

@endsection