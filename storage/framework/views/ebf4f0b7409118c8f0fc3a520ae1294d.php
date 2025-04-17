<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?> " rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/my-style.css')); ?> " rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container text-center p-4">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    <?php $__empty_1 = true; $__currentLoopData = $KurirData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $DataMahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="list-group-item">
                        <?php echo e($DataMahasiswa->nama); ?> <?php echo e(($DataMahasiswa->nim)); ?>,
                        Tanggal Lahir: <?php echo e($DataMahasiswa->tanggal_lahir); ?>,
                        IPK: <?php echo e($DataMahasiswa->ipk); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
</body>

</html><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 6 migration\resources\views/tampil_mahasiswa.blade.php ENDPATH**/ ?>