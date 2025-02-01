@extends("layouts.index")

@section('konten')
    @foreach($lists as $lists)
        <h1> Nama : {{ $lists->nama }}  </h1>
    @endforeach
@endsection