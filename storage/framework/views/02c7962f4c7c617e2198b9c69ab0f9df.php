<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Daftar Mahasiswa</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/my-style.css">
<style>
   
</style>
</head>
<body>
<div class="container text-center mt-4">
    <h1>Daftar Mahasiswa</h1>
    <ol class="list-group my-4">
        <?php
        foreach ($KurirData as $NamaMahasiswa) {
            echo "<li class=\"list-group-item\"> $NamaMahasiswa </li>";
        }
        ?>
    </ol>
    <div>
        <img class="rounded-circle img-thumbnail m-2" src="/assets/img/img 1.jpeg" alt="Image 1">
        <img class="rounded-circle img-thumbnail m-2" src="/assets/img/img 2.jpeg" alt="Image 2">
        <img class="rounded-circle img-thumbnail m-2" src="/assets/img/img 3.png" alt="Image 3">
        <img class="rounded-circle img-thumbnail m-2" src="/assets/img/img 4.jpeg" alt="Image 4">
    </div>
    <div class="footer">
        Copyright © <?php echo date("Y"); ?> Praktikum Framework UBHI
    </div>
</div>
<script src="/assets/js/my-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 3 laravel\resources\views/mahasiswa2.blade.php ENDPATH**/ ?>