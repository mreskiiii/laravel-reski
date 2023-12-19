<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTIK</title>
</head>
<body>
    <h2>Applikasi Perpustakaan FTIK</h2><br>
    <b>Pilihan Menu</b>
    <ol>
        <li><a href="{{url('anggota')}}"> Daftar Anggota</a></li>
        <li><a href="{{url('buku')}}"> Daftar Buku</a></li>
        <li><a href="{{url('pinjam')}}"> Pinjam Buku</a></li>
    </ol>
    <a href="{{url('login')}}">Logout</a>
</body>
</html>