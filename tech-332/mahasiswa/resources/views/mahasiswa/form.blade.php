<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Data</title>
</head>

<body>
    <form action="/mahasiswa/simpan" method="POST">
        @csrf
        <label for="kode_mahasiswa">Kode Mahasiswa</label>
        <input type="text" name="kode_mahasiswa"><br>

        <label for="nama_mahasiswa">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa"><br>

        <label for="email">Email</label>
        <input type="text" name="email"><br>

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan"><br>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir"><br>

        <input type="submit" value="Save">
    </form>
</body>

</html>
