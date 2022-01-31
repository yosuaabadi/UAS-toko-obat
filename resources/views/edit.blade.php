<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Edit data Kegiatan</h1>
        <div class="row">
            <div class="col md-12">
           <form action="/update/{{$produk->id}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="">Nama Produk </label>
                        <input name="nama" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Nama Baru" value="{{$produk->nama}}">
                      </div>
                      
                      <div class="form-group">
                        <label for="">Satuan </label>
                        <input name="waktu" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" value="{{$produk->satuan}}">
                      </div>
                      
                      <div class="form-group">
                        <label for="">Harga</label>
                        <input name="harga" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukan Harga"value="{{$produk->harga}}">
                      </div>
                        <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
              </div>
            </form>
           
            </div>
        </div>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>