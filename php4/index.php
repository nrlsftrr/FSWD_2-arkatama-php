<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi CRUD - PHP - MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    <div class="mt-3">
    <h1 class= "text-center">Aplikasi CRUD - PHP - MYSQL</h1>
    <h1 class= "text-center">Nurul Safitri Ariani</h1>
    </div>
    <div class="card">
  <div class="card-header bg-primary text-white">
    Data Pengguna
  </div>

  <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
  Tambah Pengguna
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
  Edit Pengguna
</button>
    <table class="table table-bordered table-striped table-hover">
        
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        
            <tr>
            <td>1</td>
            <td>Fitriani</td>
            <td>fitriani25@gmail.com</td>
            <td>08974826148</td>
            <td>Sistem Informasi</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
            </tr>

            <tr>
            <td>2</td>
            <td>Salsabila</td>
            <td>salsabila11@gmail.com</td>
            <td>081234567892</td>
            <td>Akuntansi</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
            </tr>

            <tr>
            <td>3</td>
            <td>Putri Ayu</td>
            <td>putriayu5@gmail.com</td>
            <td>081239876544</td>
            <td>Ekonomi Syariah</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
            </tr>

            <tr>
            <td>4</td>
            <td>Dimas Akbar</td>
            <td>dimasakbar18@gmail.com</td>
            <td>089622635498</td>
            <td>Teknik Informatika</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
            </tr>

            <tr>
            <td>5</td>
            <td>Riyan Galih</td>
            <td>riyangalih8@gmail.com</td>
            <td>082276452897</td>
            <td>Teknik Sipil</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
            </tr>

    </table>

        <!-- Modal -->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="aksi_crud.php">
            <div class="modal-body">

                    <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap Anda!">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="temail" placeholder="Masukkan Email Anda!">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Nomor Telp </label>
                    <input type="number" class="form-control" name="tnumber" placeholder="Masukkan Nomor Telp Anda!">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Jurusan </label>
                    <select class="form-select" name="tjurusan">
                        <option></option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Ekonomi Syariah">Ekonomi Syariah</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>

                    </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-primary" name="bsimpan">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>

        </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>