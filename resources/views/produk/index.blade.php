@extends('layouts.index')

@section("content")
  <h1>Data Produk</h1>
  
  <a class="btn btn-primary my-4" href={{ url("produk/tambah") }}>Tambah Produk</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $data)
        <tr>
          <th scope="row">{{ $nomor++ }}</th>
          <td>{{ $data->nama_produk }}</td>
          <td>  {{  number_format($data->harga, 0, ',', '.') }}</td>
          <td>{{ $data->stok }}</td>
          <td class="d-flex gap-2">
            <a class="btn btn-sm btn-success" href={{ url("produk/edit/$data->id") }}>Edit</a>

            <form action={{ url("produk/$data->id") }} method="POST">
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