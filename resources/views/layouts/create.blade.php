@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-5">
<form action="{{route('store')}}" method="POST">
    {{csrf_field()}}
<div class="form-group">
    <label for="title">Tytuł</label>
    <input class="form-control" type="text" name="title">
</div>
<div class="form-group">
    <textarea class="form-control" type="text" name="description"></textarea>
</div>
<div class="form-group">
<label for="priority">Priorytet</label>
    <select name="priority">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</div>
<div class="form-group">
    <label for="channel">Dział:</label>
    <select name="channel">
        @foreach($channels as $channel)
            <option value="{{$channel->id}}">{{$channel->title}}</option>
        @endforeach
    </select>
</div>

</form>
</div>
</div>
@endsection
