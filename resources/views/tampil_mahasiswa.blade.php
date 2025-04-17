<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{ asset('assets/css/my-style.css')}} " rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container text-center p-4">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @forelse ($KurirData as $DataMahasiswa)
                    <li class="list-group-item">
                        {{$DataMahasiswa->nama}} {{($DataMahasiswa->nim)}},
                        Tanggal Lahir: {{$DataMahasiswa->tanggal_lahir}},
                        IPK: {{$DataMahasiswa->ipk}}
                    </li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
</body>

</html>