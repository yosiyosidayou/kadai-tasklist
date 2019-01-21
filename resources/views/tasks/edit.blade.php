@extends('layouts.app')

@section('content')

   

    <h1>id: {{ $task->id }}の編集ページ</h1>
    {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
    
    <div class="form-group">
        {!!Form::label('status','ステータス:') !!}
        {!!Form::text('status',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
    {!! Form::label('content','タスク:') !!}
    {!! Form::text('content',null) !!}
    </div>
    
    {!! Form::submit('更新',['class'=>'btn btn-light']) !!}
    {!! Form::close() !!}

@endsection