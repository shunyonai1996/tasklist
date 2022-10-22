@extends('layouts.app')

@section('content')

<tr>
  <th>id</th>
  <td>{{ $task->id }}</td>
  <th>タスク内容</th>
  <td>{{ $task->content }}</td>
  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('タスクを削除', ['class', 'btn btn-danger']) !!}
  {!! Form::close() !!}
</tr>

@endsection