<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"
    style="margin-top: 80px">
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                TAMBAH Siswa
            </div>
            <div class="card-body">
                <form action="simpan_siswa.php"
                method="POST">
            <div class="form-group">
                <label>NISN</label>
                <input type="text"
                name="nisn" placeholder="masukan NISN siswa" class="form-control">
            </div>

            <div class="form-group">
                <label>NAMA LENGKAP</label>
                <input type="text"
                name="nama_lengkap" placeholder="masukan nama SISWA" class="form-control">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
             <textarea class="form-control" name="alamat" placeholder="masukan ALAMAT siswa" rows="4"></textarea>
            </div>
            <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success w-50 p-2">SIMPAN</button>
            <button type="reset" class="btn btn-warning w-50 p-2">RESET</button>
            </div>
            </form>
            </div>
         </div>
      </div>
   </div>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>