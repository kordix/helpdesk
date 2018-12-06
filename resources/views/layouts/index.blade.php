@extends('layouts.app')

@section('content')
<div class="container">
    Tutaj będzie helpdesk
    @foreach($tasks as $task)
        <div class="col-md-4">
            <div class="card @switch($task->priority_id) @case(1)text-white bg-danger @break @case(2) text-white bg-primary @break @case(3) bg-light @break @endswitch">
                <div class="card-header">{{$task->title}}</div>

                <div class="card-body">
                {{$task->description}}
                </div>
            </div>

        </div>
    @endforeach
</div>
@endsection
