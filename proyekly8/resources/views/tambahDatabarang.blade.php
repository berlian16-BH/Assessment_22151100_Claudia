<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Data</title>

    <style>
        .header-profil {
            text-align: center; /* for older Bootstrap versions or without Bootstrap */
        }
    </style>
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <form action="{{ url('/insertdata') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- ... -->
        <div class="container vh-50 d-flex justify-content-center align-items-center">
            <h2 class="header-profil">DATA BARANG</h2>
        </div>
        <div class="col-12">
           <div class="card">
           
        <div class="row g-3">
            <div class="col-3">
                <label for="inputPassword6" class="form-label">Nama Barang</label>
                <input type="text" name="namabarang" class="form-control" id="inputPassword6">
            </div>
            <div class="col-3">
                <label for="inputPassword6" class="form-label">Satuan</label>
                <input type="text" name="Satuan" class="form-control" id="inputPassword6">
            </div>
            <div class="col-3">
                <label for="inputPassword6" class="form-label">Harga Satuan</label>
                <input type="text"  name="HargaSatuan" class="form-control" id="inputPassword6">
            </div>
            <div class="col-3">
                <label for="inputPassword6" class="form-label">Stok</label>
                <input type="text" name="Stok" class="form-control" id="inputPassword6">
            </div>
        </div>
    </div>
</div>

        <button class="btn btn-success mt-3" type="submit">Submit</button>
    </form>
</div>

</body>
</html>
