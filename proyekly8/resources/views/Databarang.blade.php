<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Barang PAT</title>
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">Data Barang</h1>
        <a href="/tambahDatabarang" type="button" class="btn btn-success mb-3" onclick="tampilkanForm()">Tambah barang</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID Barang</th>
                    <th>Nama barang</th>
                    <th>Satuan</th>
                    <th>Harga Barang</th>
                    <th>Stok</th>
                    <th>Edit/delete</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
               @endphp
               @foreach ($data as $row)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$row->namabarang}}</td>
                    <td>{{$row->Satuan}}</td>
                    <td>{{$row->HargaSatuan}}</td>
                    <td>{{$row->Stok}}</td>
                 
                <td>
                   <a href="/editdatabarang/{{$row->id}}" type="button" class="btn btn-success">Edit</a>
                   <a href="/deletedatabarang/{{$row->id_alat}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
               @endforeach
               
              
            </tbody>
        </table>
    </div>
</body>
</html>
