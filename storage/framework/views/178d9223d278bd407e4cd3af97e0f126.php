<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Galeri</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center mt-3 p-4 bg-white">
        <div class="mb-3">Data Mahasiswa:</div>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ul class="list-group">
                    <div class="list-group my-4">
                        <?php
                            foreach ($KurirDataMahasiswa as $nama) {
                                echo "<li class='list-group-item'> $nama </li>";
                            }
                        ?>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <span>Program Studi Informatika - UBHI</span>
                <span>Taufiq Agung Cahyono, M.Kom</span>
            </div>
            <div class="text-center mt-2">
                Sistem Informasi Mahasiswa | Copyright &copy; <?php echo date("Y"); ?> Informatika-UBHI
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 4 blade template\resources\views/mahasiswa.blade.php ENDPATH**/ ?>