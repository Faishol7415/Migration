<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background: linear-gradient(145deg, #6c757d, #5a6268);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 0; /* Padding yang disesuaikan */
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #ffca28 !important;
        }
        .nav-link {
            transition: 0.3s;
            color: #f8f9fa !important;
            position: relative;
        }
        .nav-link:hover {
            color: #ffca28 !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #ffca28;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">


            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/mahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="/dosen">Data Dosen</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Konten Anda di sini -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 4 blade pemisah elemen\resources\views/layout/header.blade.php ENDPATH**/ ?>