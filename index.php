<?php 

session_start();

if( !isset($_SESSION["login"]))  {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa ORDER BY id DESC");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts</title>
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
                        <div class="row">
                            <div class="col-md-3">
                                <a href="tambah.php" class="btn btn-md btn-success mb-3">Tambah Data</a>
                                <a href="logout.php" class="btn btn-md btn-danger mb-3">Logout</a>
                            </div>
                            <div class="col-md-4 ms-auto">
                                <form action="" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari data siswa..." name="keyword" autofocus autocomplete="off">
                                        <button class="btn btn-primary" type="submit" name="cari" id="button-addon2">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>Email</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach( $siswa as $row ) : ?>
                                <tr class="text-center">
                                    <td><?= $i ?></td>
                                    <td><img src="img/<?= $row["gambar"]; ?>" width="75px"></td>
                                    <td><?= $row["nama"] ?></td>
                                    <td><?= $row["nis"] ?></td>
                                    <td><?= $row["email"] ?></td>
                                    <td><?= $row["jurusan"] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                    <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>