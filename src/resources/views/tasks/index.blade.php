@extends('layouts.app')

@section('content')

<h2>タスク一覧</h2>
  @if (count($tasks) > 0)
  <ul>
    @foreach($tasks as $task)
    <li>タスクID:{!! link_to_route('tasks.show', $task->id, ['task' => $task->id] ) !!}</li>
    <li>タスク内容：{{ $task->content }}</li>
    <li>{!! link_to_route('tasks.edit', '内容を編集', ['task' => $task->id]) !!}</li>
    @endforeach
  </ul>
@endif

{!! link_to_route(
  'tasks.create',
   'タスクを作成する',
   [],
   ['class' => 'btn btn-primary']
   ) !!}


@endsection