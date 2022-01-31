@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Toko Obat</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
  
  <div class="container">
    @if(session("info"))
    <div class="alert alert-success">
        {{session("info")}}
    </div>
    @endif()
        <div class="row">
            <div class="col-6">
                <h1>Informasi Produk</h1>
            </div>
        </div>
        <button type="button" class="btn btn-primary float-right mb-2" data-toggle="modal" data-target="#exampleModal">
                      Tambah Produk
                    </button>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td width="5%">No.</td>
                    <td>Nama Produk</td>
                    <td>Satuan</td>
                    <td>Harga(Rp)</td>
                    <td colspan=3 class="w-25">Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($namaProduk as $item)
                <tr @if ($item->status=="habis") disabled
                     class="bg-dark text-light"
                     @endif>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->satuan}}</td>
                    <td>{{$item->harga}}</td>
                    <td>
                        <a href="/edit/{{$item->id}}" class="btn btn-block btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="/delete/{{$item->id}}" class="btn btn-block btn-danger">Hapus</a>
                    </td>
                    <td>
                      <a href="/action/{{$item->id}}" class="btn btn-block btn-dark"
                      >Habis </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <form action="/create" method="POST">
                                  @csrf
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Produk</label>
                                    <input name="nama" type="text" class="form-control" id="" aria-describedby="" placeholder="Nama Produk">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <input name="satuan" type="text" class="form-control" id="" aria-describedby="" placeholder="Satuan">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga" type="text" class="form-control" id="" aria-describedby="" placeholder="Harga">
                                  </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                          </div>
                        </div>
                      </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
  </html>
  @endsection