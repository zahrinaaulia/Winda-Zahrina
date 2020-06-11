@extends('layout/main')

@section('title','Insert')

@section('container')

<div class="container-fluid" style="margin:3%">
    <h4>Daftar Bahan Makanan</h4>
    <br>
    <button type="button" class="btn btn-primary">Kembali</button>
</div>

<div class="content-table" style="margin:5%; margin-top:0%;">
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>

                <th scope="col">Nama Bahan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bahan as $bhn)
            <tr>
                <td>{{ $bhn->Nama_Bahan }}</td>
                <td>{{ $bhn->Nama_Kategori}}</td>
                <td>{{ $bhn->Jumlah }}</td>
                <td>{{ $bhn->Satuan }}</td>
                <td>{{ $bhn->Harga_Satuan }}</td>
                <td>
                    <!-- button delete -->
                    <a style="margin-left:10px;" href="deleteBahan/{{ $bhn->id }}">
                        <button class="btn btn-danger">Delete</button></a>
                    
                    <!-- button edit -->
                    <button type="button" style="margin-left:10px;" data-target=".modal{{$bhn->id}}" data-toggle="modal"
                        value="#" class="btn btn-secondary">Edit</button>
                    <div class="modal fade modal{{$bhn->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="padding:20px; margin-left:50px">
                                <h3>Edit Bahan</h3>
                                <!-- form untuk edit bahan -->
                                <form method="POST" action="/editBahan">
                                @csrf
                                    <div class="form-group">
                                        <label for="namabahan">Nama Bahan</label>
                                        <input type="text" class="form-control" name=namabahan id="namabahan"
                                            aria-describedby="emailHelp" value="{{$bhn->Nama_Bahan}}">
                                        <input style="display:none;" type="text" class="form-control" name=id_bahan id="id_bahan"
                                            aria-describedby="emailHelp" value={{$bhn->id}}>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoribahan">Nama Kategori</label>
                                        <input type="text" class="form-control" name=kategoribahan
                                            id="kategoribahan" aria-describedby="emailHelp"
                                            value="{{$bhn->Nama_Kategori}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlahbahan">Jumlah</label>
                                        <input type="text" class="form-control" name=jumlahbahan id="jumlahbahan"
                                            aria-describedby="emailHelp" value="{{$bhn->Jumlah}}" readonly>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="hargabahan">Satuan</label>
                                        <input type="text" class="form-control" name=satuanbahan id="satuanbahan"
                                            aria-describedby="emailHelp" value="{{$bhn->Satuan}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="hargabahan">Harga Satuan</label>
                                        <input type="text" class="form-control" name=hargabahan id="hargabahan"
                                            aria-describedby="emailHelp" value="{{$bhn->Harga_Satuan}}" >
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <button type="submit" class="btn btn-dark"
                                                style="width: 100px; height: 50px; margin-right:100px;margin-left:40px; margin-top:-40px;">Edit</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah
    Bahan</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding:20px; margin-left:50px">
            <center>
                Tambah Bahan
            </center>
            <!-- form untuk tambah bahan -->
            <form method="POST" action="/addBahan">
                @csrf
                <select name="id_kategori" id="idkategori" style="margin-bottom:20px;" class="custom-select"
                    id="inputGroupSelect01">
                    <option selected disable>Nama Kategori</option>
                    @foreach( $kategori as $ktr )

                    <option value="{{ $ktr->id }}">{{ $ktr->Nama_Kategori }}</option>

                    @endforeach
                </select>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bahan</label>
                    <input type="text" class="form-control" name=namabahan id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Masukkan Nama Bahan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="text" class="form-control" name=jumlahbahan id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Masukkan Jumlah Bahan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Satuan</label>
                    <input type="text" class="form-control" name=satuanbahan id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Masukkan Satuan Bahan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga Satuan</label>
                    <input type="text" class="form-control" name=hargabahan id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Masukkan Harga Bahan">
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-dark"
                            style="width: 100px; height: 50px; margin-right:100px;margin-left:40px; margin-top:-40px;">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
