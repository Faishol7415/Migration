<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
<ol>
    <?php
    foreach ($KurirData as $DataMahasiswa){
        echo "<li>$DataMahasiswa</li>";
    }
    
    ?>
</ol>
    <div>
        Copyright @ <?php echo date("Y");?> Frame Work-UBHI
    </div>
    <script src="/asset/js/apps.js"></script>
</body>
</html><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 3 laravel\resources\views/mahasiswa1.blade.php ENDPATH**/ ?>