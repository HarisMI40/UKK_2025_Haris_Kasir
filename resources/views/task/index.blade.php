@extends('layouts.index')

@section('konten')
    <h1>{{ $list->nama }}</h1>


    @foreach ($list->task as $task)
        <li>{{ $task->nama }}</li>
    @endforeach

    <form action="{{ url("/$list->id") }}" method="post">
        @method("POST")
        @csrf

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
    </form>
@stop
