@extends('layout/main')

@section('title','Insert')

@section('container')

<div class="container-fluid" style="margin:3%">
  <h4>Daftar Bahan Makanan</h4>
  <br>
  <button type="button" class="btn btn-primary">Kembali</button>
</div>

<div class="content-table" style="margin:5%; margin-top:0%;">
  <table id="example"
  class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col" >Nama Bahan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Satuan</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Asam/lunak</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.2000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ati Ampela</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.3520</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Fillet</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.6000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Lalapan</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.1560</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam setengah potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>kalkun</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
        <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>Ayam Potong</td>
      <td>Bahan Makanan</td>
      <td>1</td>
      <td>gram</td>
      <td>Rp.8000</td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-bahan">
          <span class="glyphicon glyphicon-remove"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
  </tbody>
</table>


</div>

<div class="modal fade" id="modal-edit-bahan" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="padding-left: 50px">
                    <div class="modal-header">
                        <h1 class="modal-title text-center" id="exampleModalCenterTitle" style="padding-left:80px">Edit Bahan</h1>
                    </div>
                    <form method="POST" action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>ID Bahan</label>
                                    <input type="text" name="idbahan" style="width: 400px" class="form-control text-center" value="#" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Nama Bahan</label>
                                    <input type="text" name="namabahan" value="#" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Harga</label>
                                    <input type="text" value="#" name="hargabahan" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Jumlah</label>
                                    <input type="text" name="jumlahbahan" value="#" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Kategori</label>
                                    <input type="text" name="kategoribahan" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                           <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-dark" style="width: 100px; height: 50px; margin-right:190px">Edit</button>
                                </div>
                                <div class="col-xs-6">
                                    <button style="margin-left: 10px; width: 100px; height: 50px" class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid" style="margin:3%">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah-kategori">
        <span class="glyphicon glyphicon-remove"></span>Tambah Kategori</button>
</div>
<div class="modal fade" id="modal-tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="padding-left: 50px">
                    <div class="modal-header">
                        <h1 class="modal-title text-center" id="exampleModalCenterTitle" style="padding-left:40px">Tambah Kategori</h1>
                    </div>
                    <form method="POST" action="#">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Nama Kategori</label>
                                    <input type="text" name="idbahan" style="width: 400px" class="form-control text-center" value="#" readonly>
                                </div>
                            </div>
                        </div> 
                        <br>
                            <div class="row">
                                <div class="col-xs-8">
                                    <button type="submit" class="btn btn-dark" style="width: 100px; height: 50px; margin-right:100px;margin-left:40px; margin-top:-40px;">Tambah</button>
                                </div>
                                <div class="col-xs-8">
                                    <button style="margin-left: 30px; width: 100px; height: 50px; margin-top:-40px;" class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                            </div>  
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
