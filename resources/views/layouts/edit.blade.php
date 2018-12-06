@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-5">
<form action="{{route('update', $task->id)}}" method="POST">

    {{csrf_field()}}
    {{method_field('PATCH')}}
<div class="form-group">
    <label for="title">Tytuł</label>
    <input class="form-control" type="text" name="title" value="{{$task->title}}">
</div>
<div class="form-group">
    <textarea class="form-control" type="text" name="description">{{$task->description}}</textarea>
</div>
<div class="form-group">
<label for="priority">Priorytet</label>
    <select name="priority">
        @for ($i = 1; $i < 4; $i++)
        <option value="{{$i}}" @if($i==$task->priority_id) selected @endif >{{$i}}</option>
    @endfor
    </select>
</div>
<div class="form-group">
    <label for="channel">Dział:</label>
    <select name="channel">
        @foreach($channels as $channel)
            <option value="{{$channel->id}}" @if($channel->id==$task->channel_id) selected @endif>{{$channel->title}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit">Edytuj</button>
</div>

</form>
</div>
</div>
@endsection
