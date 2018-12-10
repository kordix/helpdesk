@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    @foreach($tasks as $task)
        <div class="col-md-3">
            <div class="form-group">
            <div class="card text-white bg-success">
                <div class="card-header">{{$task->title}} <p style="font-size:7px;margin:0px;padding:0px;text-align:right;float:right">{{$task->id}}</p></div>

                <div class="card-body">
                <p>{{$task->description}}</p>

                <form style="float:left" action="{{route('delete',$task->id)}}" method="POST">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit" style="margin:0px 5px 0px 0px">
                            Usuń
                        </button>
                </form>
                <a href="{{route('edit',$task->id)}}"><button class="btn btn-warning btn-sm">Edytuj</button></a>
                {{-- <a href="{{route('complete',$task->id)}}"><button class="btn btn-success btn-sm">Complete</button></a> --}}


                </div>
            </div>
            </div>

        </div>
    @endforeach
</div>
</div>
@endsection
