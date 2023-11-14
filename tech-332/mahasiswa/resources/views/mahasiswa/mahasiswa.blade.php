<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('support/css/style.css') }}">

    <title>Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Kode Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Tanggal Lahir</th>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $index => $mhs)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $mhs->kode_mahasiswa }}</td>
                        <td>{{ $mhs->nama_mahasiswa }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->tanggal_lahir }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
