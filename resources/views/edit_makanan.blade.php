@extends('layout/main')

@section('title','Insert')

@section('container')

<div class="container-fluid" style="margin:3%">
  <h4>Daftar Makanan</h4>
</div>
<div class="container-fluid" style="margin:3%;">
  <div class="float-left" style="margin-bottom:3%;">
    <button type="button" class="btn btn-primary">Kembali</button>
  </div>
  <div class="float-right" style="margin-bottom:3%; margin-left:3%;">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>

<div class="content-table" style="margin:5%">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Bahan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Satuan</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
  </tbody>
</table>


</div>

@endsection
