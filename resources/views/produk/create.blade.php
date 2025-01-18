@extends('layouts.index')

@section("content")
  <h1>Tambah Produk</h1>
  <form action="" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" name="nama_produk">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" class="form-control" id="harga" name="harga">
    </div>

    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="number" class="form-control" id="stok" name="stok">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop