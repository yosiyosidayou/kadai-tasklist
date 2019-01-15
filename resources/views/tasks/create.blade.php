@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    
    
    
    {!! Form::label('content', 'タスク:') !!}
    
    
    
    {!! Form::text('content', null) !!}
    
    
    {!! Form::submit('送信') !!}
    
    {!! Form::close() !!}
    

@endsection