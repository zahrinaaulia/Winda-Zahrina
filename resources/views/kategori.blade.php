@extends('layout/main')

@section('title','Insert')

@section('container')

<div class="container-fluid" style="margin:3%">
  <h4>Daftar Kategori</h4>
  <br>
  <button type="button" class="btn btn-primary">Kembali</button>
</div>

<div class="content-table" style="margin:5%; margin-top:0%;">
  <table id="example"
  class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID Kategori</th>
      <th scope="col">Nama Kategori</th>
      <th>Option</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($kategori as $ktr)
    <tr>
      <td>{{ $ktr->id}}</td>
      <td>{{ $ktr->Nama_Kategori }}</td>
      
     
      <td>
                    <a style="margin-left:10px;" href="delete/{{ $ktr->id }}">
                    <button class="btn btn-danger">Delete</button></a>
                    <button id="butEdit" style="margin-left:10px;"data-target=".modal1" data-toggle="modal" value="{{ $ktr->id }}" class="btn btn-secondary">Edit</button>
        </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kategori</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="padding:20px;">
    <center>
    Tambah Kategori
    </center>
    <form method="POST" action="/addKategori">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" class="form-control" name=namakategori id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Kategori">
  </div>
                        <br>
                            <div class="row">
                                <div class="col-xs-8">
                                    <button type="submit" class="btn btn-dark" style="width: 100px; height: 50px; margin-right:100px;margin-left:40px; margin-top:-40px;">Tambah</button>
                                </div>

                            </div>
                    </form>
    </div>
  </div>
</div>



@endsection