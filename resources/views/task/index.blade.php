@extends('layouts.index')

@section('konten')
    <h1>{{ $list->nama }}</h1>

    <ul class="list-group list-group-flush">
        @foreach ($list->task as $task)
        {{-- <li> <input type="checkbox" name="selesai" id="" class="form-control"> {{ $task->nama }}</li> --}}
        <li class="list-group-item" style="background:none">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <div style="display: flex; justify-content: space-between">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $task->nama }}
                    </label>

                    <div class="d-flex gap-2">
                        <a href="{{ url("/task/$task->id/edit") }}" class="btn btn-outline-success btn-sm">Edit</a>
                        <form action="{{ url("/$task->id") }}" method="post">
                            @csrf
                            @method("DELETE")
    
                            <button type="submit" class="btn btn-outline-danger btn-sm">X</button>
                        </form>

                    </div>

                </div>
            </div>
        </li>
        @endforeach
    </ul>

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
