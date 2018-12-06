@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    @foreach($tasks as $task)
        <div class="col-md-3">
            <div class="form-group">
            <div class="card @switch($task->priority_id) @case(1)text-white bg-danger @break @case(2) text-white bg-primary @break @case(3) bg-light @break @endswitch">
                <div class="card-header">{{$task->title}}</div>

                <div class="card-body">
                <p>{{$task->description}}</p>

                <form style="float:left" action="{{route('delete',$task->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button class="btn  @if($task->priority_id == 1) btn-warning @else btn-danger @endif btn-sm" type="submit" style="margin:0px 5px 0px 0px">
                            Usuń
                        </button>
                </form>

                </div>
            </div>
            </div>

        </div>
    @endforeach
</div>
</div>
@endsection
