@extends('layouts.index')

@section("content")
  <h1>Update Produk</h1>
  <form action={{ url("produk/update/$data->id") }} method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" value={{ $data->nama_produk }} name="nama_produk">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" id="harga" value={{ $data->harga }} name="harga">
    </div>

    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="number" class="form-control" id="stok" value={{ $data->stok }}  name="stok">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@stop