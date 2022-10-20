<?php

session_start();

if( !isset($_SESSION["login"]))  {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diupdate atau tidak
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            background: lightgrey;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?= $sw["id"] ?>">
                            <input type="hidden" name="gambarLama" value="<?= $sw["gambar"] ?>">
                            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required value="<?= $sw["nama"] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NIS</label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" required value="<?= $sw["nis"] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required value="<?= $sw["email"] ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required value="<?= $sw["jurusan"] ?>">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                                <img src="img/<?= $sw["gambar"]; ?>" alt="" width="75px"> 
                                <br>
                            </div>

                            <button type="submit" name="submit" class="btn btn-md btn-primary">Simpan</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>