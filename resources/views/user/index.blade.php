@extends('layouts.index')

@section("content")
  <h1>Data User</h1>
  
  <a class="btn btn-primary my-4" href={{ url("user/tambah") }}>Tambah User</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $data)
        <tr>
          <th scope="row">{{ $nomor++ }}</th>
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td class="d-flex gap-2">
            <a class="btn btn-sm btn-success" href={{ url("user/edit/$data->id") }}>Edit</a>

            <form action={{ url("user/$data->id") }} method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop