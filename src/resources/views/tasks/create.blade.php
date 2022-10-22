@extends('layouts.app')

@section('content')

  @if (count($errors) > 0)
    <ul class="alert alert-danger" role='alert'>
      @foreach ($errors->all() as $error)
        <li class="ml-4">{{ $error }}</li>
      @endforeach
    </ul>
  @endif

<div class="row">
  <div class="col-6">
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
      <div class="form-group">
        {!! Form::label('content', 'タスク内容') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>
      {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection