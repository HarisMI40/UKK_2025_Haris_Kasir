@extends('layouts.index')

@section("content")
  <h1>Update User</h1>
  <form action={{ url("user/update/$data->id") }} method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name" value={{ $data->name }} name="name">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" value={{ $data->email }} name="email">
    </div>

    <div class="mb-3">
      <label for="stok" class="form-label">Password</label>
      <input type="password" class="form-control" id="stok"  name="stok">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@stop