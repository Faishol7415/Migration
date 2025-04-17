<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #6c757d !important;
        }
        .nav-link {
            transition: 0.3s;
            color: #f8f9fa !important;
        }
        .nav-link:hover {
            color: #ffca28 !important;
            transform: scale(1.1);
        }
        .container {
            margin-top: 50px;
        }
        .card {
            transition: 0.3s;
            border: none;
            border-radius: 15px;
            background: linear-gradient(145deg, #ffffff, #e3e3e3);
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 8px 8px 16px #bdbdbd, -8px -8px 16px #ffffff;
        }
        footer {
            background-color: #6c757d;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }
        .gallery img {
            width: 200%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-3 text-center">
                    <h5>Galeri</h5>
                    <p>Koleksi foto dan dokumentasi.</p>
                    <div class="row gallery">
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri1.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri2.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri3.png" class="img-fluid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri4.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri5.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="/assets/img/galeri6.jpeg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 4 blade pemisah elemen\resources\views/isi/content_galeri.blade.php ENDPATH**/ ?>